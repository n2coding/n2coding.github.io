<?php
// Get the names and values for vars sent to this script
if (isset($_GET))
{
	foreach($_GET as $name => $value) $$name = $value;
};

# Is the OS Windows or Mac or Linux
if (stristr(PHP_OS,'win')) {
  $eol="\r\n";
} elseif (stristr(PHP_OS,'mac')) {
  $eol="\r";
} else {
  $eol="\n";
}

$Latin1 = ($Charset != "utf-8" ? 1 : 0);

// Ghost Control mod by Ciprian
if(!function_exists("ghosts_in"))
{
	function ghosts_in($what, $in, $Charset)
	{
		$ghosts = explode(",",$in);
		for (reset($ghosts); $ghost_name=current($ghosts); next($ghosts))
		{
			if (strcasecmp(mb_convert_case($what,MB_CASE_LOWER,$Charset), mb_convert_case($ghost_name,MB_CASE_LOWER,$Charset)) == 0) return true;
		}
		return false;
	};
};

// Clean the buzz sounds after play
#$ChatS = new DB;
if(!isset($DbLink)) $DbLink = new DB;
$DbLink->query("SELECT COUNT(*) FROM ".C_MSG_TBL." WHERE message LIKE '%...BUZZER...%' AND m_time<'".(time()-10)."'");
if ($DbLink->num_rows() > 0)
{
	$DbLink->query("SELECT message FROM ".C_MSG_TBL." WHERE message LIKE '%...BUZZER...%' AND m_time<'".(time()-10)."' ORDER BY m_time DESC LIMIT 1");
	list($Buzz) = $DbLink->next_record();
	$To_remove = strstr($Buzz, "<EMBED SRC=");
	$Buzz_new = rtrim(str_ireplace($To_remove,"",$Buzz));
	$DbLink->query("UPDATE ".C_MSG_TBL." SET message = '".$Buzz_new."' WHERE message='$Buzz' AND m_time<'".(time()-10)."' ORDER BY m_time DESC LIMIT 1");
	$RefreshMessages = true;
}

// Clean the entrance sounds after play
$DbLink->query("SELECT COUNT(*) FROM ".C_MSG_TBL." WHERE message LIKE 'stripslashes(sprintf(L_ENTER_ROM,%' AND m_time<'".(time()-10)."'");
if ($DbLink->num_rows() > 0)
{
	$DbLink->query("SELECT message FROM ".C_MSG_TBL." WHERE message LIKE 'stripslashes(sprintf(L_ENTER_ROM,%' AND m_time<'".(time()-10)."' ORDER BY m_time DESC LIMIT 1");
	list($Hello) = $DbLink->next_record();
	$Hello_new = rtrim(str_ireplace("L_ENTER_ROM","L_ENTER_ROM_NOSOUND",$Hello));
	$DbLink->query("UPDATE ".C_MSG_TBL." SET message = '".$Hello_new."' WHERE message='$Hello' AND m_time<'".(time()-10)."' ORDER BY m_time DESC LIMIT 1");
	$RefreshMessages = true;
}

// Clean the welcome sounds after play
$DbLink->query("SELECT COUNT(*) FROM ".C_MSG_TBL." WHERE message LIKE 'sprintf(WELCOME_MSG)' AND m_time<'".(time()-10)."'");
if ($DbLink->num_rows() > 0)
{
	$DbLink->query("SELECT message FROM ".C_MSG_TBL." WHERE message LIKE 'sprintf(WELCOME_MSG)' AND m_time<'".(time()-10)."' ORDER BY m_time DESC LIMIT 1");
	list($Welcome) = $DbLink->next_record();
	$Welcome_new = rtrim(str_ireplace("WELCOME_MSG","WELCOME_MSG_NOSOUND",$Welcome));
	$DbLink->query("UPDATE ".C_MSG_TBL." SET message='".$Welcome_new."' WHERE message='$Welcome' AND m_time<'".(time()-10)."' ORDER BY m_time DESC LIMIT 1");
	$RefreshMessages = true;
}
#$ChatS->close();

// Clean the welcome sounds after play
if(C_BDAY_EMAIL)
{
#	$ChatB = new DB;
	$today = strftime("%Y-%m-%d",(time() + C_BDAY_TIME * 60));
	$email_intval = C_BDAY_TIME * 60 + C_BDAY_INTVAL * 24 *60 * 60;
	$max_email_intval = time() - $email_intval - 24 *60 * 60;
	$before_today = strftime("%Y-%m-%d",time() - $email_intval);
	$DbLink->query("SELECT COUNT(*) FROM ".C_REG_TBL." WHERE birthday IS NOT NULL AND birthday!='0000-00-00' AND CONCAT(YEAR(NOW()),'-',RIGHT(birthday,5)) BETWEEN '$before_today' AND '$today' AND (bday_email_sent<'".$max_email_intval."' OR bday_email_sent is NULL OR bday_email_sent='') ORDER BY birthday ASC");
	if ($DbLink->num_rows() > 0)
	{
		$DbLink->query("SELECT username,firstname,lastname,email,birthday,slang FROM ".C_REG_TBL." WHERE birthday IS NOT NULL AND birthday!='0000-00-00' AND CONCAT(YEAR(NOW()),'-',RIGHT(birthday,5)) BETWEEN '$before_today' AND '$today' AND (bday_email_sent<'".$max_email_intval."' OR bday_email_sent is NULL OR bday_email_sent='') ORDER BY birthday ASC");
		include_once("lib/mail_validation.lib.php");
		if (C_ADMIN_NOTIFY && strstr(C_ADMIN_EMAIL,"@") && C_ADMIN_EMAIL != "" && C_ADMIN_EMAIL != "your@email.com")
		{
			$Owner_email = C_ADMIN_EMAIL;
			if (isset($MailFunctionOn))
			{
				if(file_exists(C_BDAY_PATH)) $greets = file(C_BDAY_PATH);
				while(list($dob_username,$dob_firstname,$dob_lastname,$dob_email,$dob_birthday,$dob_lang) = $DbLink->next_record())
				{
					$dob_name = $dob_firstname != "" ? $dob_firstname : $dob_username;
					$greet = rand(0, sizeof($greets)-1);
					$greet_text = $greets[$greet];
					$greet_text = str_replace("<br />",$eol,$greet_text);
					if($dob_lang && file_exists("localization/".$dob_lang."/localized.chat.php")) include_once("localization/".$dob_lang."/localized.chat.php");
					else include_once("localization/".C_LANGUAGE."/localized.chat.php");
					$dob1_subject = sprintf($L_DOB_SUBJ, $dob_name);
					if(send_dob_email($dob_name, $dob_email, "[".(C_CHAT_NAME != "" ? C_CHAT_NAME : APP_NAME)."] ". $dob1_subject, $greet_text))
					{
						include_once("admin/mail4admin.lib.php");
						send_email_admin($Owner_email." <".$Owner_email.">", "[".(C_CHAT_NAME != "" ? C_CHAT_NAME : APP_NAME)."] ".$dob1_subject." - copy", "This is a copy:".$eol.$eol.$greet_text.$eol.$eol.$dob1_subject.$eol.$dob_birthday, "", "");
						$DbLink->query("UPDATE ".C_REG_TBL." SET bday_email_sent=".time()." WHERE username='".$dob_username."'");
					}
					unset($dob_username,$dob_firstname,$dob_lastname,$dob_name,$dob_email,$dob_birthday,$dob_lang,$dob1_subject,$greet_text);
				}
			}
		}
	}
#	$ChatB->close();
}

#$ChatM = new DB;
# clean old bot entrances but keep the last one
// Archive and Clean the old messages
$DbLink->query("SELECT COUNT(*) FROM ".C_MSG_TBL." WHERE username = 'SYS enter' AND message LIKE '%\"".C_BOT_NAME."\"%'");
if ($DbLink->num_rows() > 0)
{
	$DbLink->query("SELECT m_time FROM ".C_MSG_TBL." WHERE username = 'SYS enter' AND message LIKE '%\"".C_BOT_NAME."\"%' ORDER BY m_time DESC LIMIT 1");
	list($bot_time) = $DbLink->next_record();
}
if(C_CHAT_LOGS)
{
	$DbLink->query("DELETE FROM ".C_MSG_TBL." WHERE username = 'SYS enter' AND message LIKE '%\"".C_BOT_NAME."\"%' AND m_time != '".$bot_time."'");
	require("logs.lib.php");
}
// Clean the old messages (without logs)
else
{
	$DbLink->query("DELETE FROM ".C_MSG_TBL." WHERE ((m_time<'".(time() - C_MSG_DEL * 60 * 60)."' AND pm_read NOT LIKE 'New%') OR (m_time<'".(time() - ((C_MSG_DEL + (C_PM_KEEP_DAYS * 24)) * 60 * 60))."')) AND !(username = 'SYS enter' AND message LIKE '%\"".C_BOT_NAME."\"%' AND m_time != '".$bot_time."')");
}

// Clean the lurkers table
if(C_CHAT_LURKING)
{
	$ChatLurk = new DB;
	$ChatLurk->query("DELETE FROM ".C_LRK_TBL." WHERE time<'".(time() - 15)."'");
	$CleanUsrTbl = ($ChatLurk->affected_rows() > 0);
	$ChatLurk->close();
}

	$Chat = new DB;
	$Chat->query("SELECT room,username,u_time,status FROM ".C_USR_TBL." WHERE username != '".C_BOT_NAME."' AND (u_time<'".(time() - 60)."' OR (status = 'k' AND u_time<'".(time() - 20)."'))");
	while(list($userroom, $userclosed, $usertime, $statusclosed) = $Chat->next_record())
	{
//		$when = date('r', $usertime + C_TMZ_OFFSET*60*60);
		$when = $usertime + C_TMZ_OFFSET*60*60;
		$when = stristr(PHP_OS,'win') ? '\".utf_conv(WIN_DEFAULT,$Charset,strftime(L_LONG_DATETIME,'.$when.')).\"' : '\".strftime(L_LONG_DATETIME,'.$when.').\"';
		$DbLink->query("SELECT type FROM ".C_MSG_TBL." WHERE room = '".$userroom."' ORDER BY m_time DESC LIMIT 1");
		list($usertype) = $DbLink->next_record();
		$userclosed = addslashes($userclosed);
		// Ghost Control mod by Ciprian
		if (C_SPECIAL_GHOSTS != "")
		{
			$sghosts = "";
			$sghosts = str_replace("'","",C_SPECIAL_GHOSTS);
			$sghosts = str_replace(" AND username != ",",",$sghosts);
		}
 		if (($sghosts != "" && ghosts_in($userclosed, $sghosts, $Charset)) || (C_HIDE_ADMINS && ($statusclosed == "a" || $statusclosed == "t")) || (C_HIDE_MODERS && $statusclosed == "m")) {}
		else $DbLink->query("INSERT INTO ".C_MSG_TBL." VALUES ('".$usertype."', '".$userroom."', 'SYS exit', '$Latin1', '".time()."', '', 'sprintf(L_CLOSED_ROM, \"(".$when.") ".$userclosed."\")', '', '')");
		if(C_EN_STATS)
		{
			$DbLink->query("UPDATE ".C_STS_TBL." SET seconds_away=seconds_away+($usertime-last_away), longest_away=IF($usertime-last_away < longest_away, longest_away, $usertime-last_away), last_away='0' WHERE (stat_date=FROM_UNIXTIME(last_away,'%Y-%m-%d') OR stat_date=FROM_UNIXTIME(last_in,'%Y-%m-%d')) AND room='$userroom' AND username='$userclosed' AND last_away!='0'");
			$DbLink->query("UPDATE ".C_STS_TBL." SET seconds_in=seconds_in+($usertime-last_in), longest_in=IF($usertime-last_in < longest_in, longest_in, $usertime-last_in), last_in='0' WHERE stat_date=FROM_UNIXTIME(last_in,'%Y-%m-%d') AND room='$userroom' AND username='$userclosed' AND last_in!='0'");
		}
		$DbLink->query("DELETE FROM ".C_USR_TBL." WHERE username='".$userclosed."'");
		$CleanUsrTbl = ($DbLink->affected_rows() > 0);
		$highpath = "botfb/" .$userclosed;         // file is in DIR "botfb" and called "username"
		if (file_exists($highpath)) unlink($highpath); // checks to see if user file exists.
		                                     // if it does delete it.
		$botpath = "botfb/" .$userclosed. ".txt";   // file is in DIR "botfb" and called "username.txt"
		if (file_exists($botpath)) unlink($botpath); // checks to see if user file exists.
	}
#	$ChatM->close();

	// Clean users table of disconnected users if booting is disabled
if(!C_CHAT_BOOT && !$CleanUsrTbl)
{
	$DbLink->query("DELETE FROM ".C_USR_TBL." WHERE username != '".C_BOT_NAME."' AND (u_time<'".(time() - C_USR_DEL * 60)."' OR (status='k' AND u_time<'".(time() - 20)."'))");
	$CleanUsrTbl = ($DbLink->affected_rows() > 0);
#	$Chat->close();
}
?>