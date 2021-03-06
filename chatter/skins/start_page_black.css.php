<?php
// Sends the appropriate header information (required to work with mozilla)
header("Content-type: text/css");

// Get the names and values for vars sent by the script that called this one
if (isset($_GET))
{
	// Prevent any possible XSS attacks via $_GET.
	foreach ($_GET as $check_url) {
		if (!is_array($check_url)) {
			$check_url = str_replace("\"", "", $check_url);
			if ((preg_match("/<[^>]*script*\"?[^>]*>/i", $check_url)) || (preg_match("/<[^>]*object*\"?[^>]*>/i", $check_url)) ||
				(preg_match("/<[^>]*iframe*\"?[^>]*>/i", $check_url)) || (preg_match("/<[^>]*applet*\"?[^>]*>/i", $check_url)) ||
				(preg_match("/<[^>]*meta*\"?[^>]*>/i", $check_url)) || (preg_match("/<[^>]*style*\"?[^>]*>/i", $check_url)) ||
				(preg_match("/<[^>]*form*\"?[^>]*>/i", $check_url)) || (preg_match("/\([^>]*\"?[^)]*\)/i", $check_url)) ||
				(preg_match("/\"/i", $check_url))) {
			die ();
			}
		}
	}
	unset($check_url);
	foreach($_GET as $name => $value) $$name = $value;
};

if (isset($Charset))
{
	if (isset($FontName) && $FontName != "")
	{
		$FontFace = "font-family: \"${FontName}, sans-serif\";";
		$SpecialFont = "1";
	}
	else
	{
		$FontFace = "font-family: helvetica, arial, geneva, sans-serif;";
	};
};

if (!isset($medium) || $medium == "") $medium = 10;
$large = round(1.4 * $medium);
$small = round(0.8 * $medium);
?>

.ChatBody
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	background-color: #000000;
	color: #333333;
	font-size: <?php echo($medium); ?>pt;
	font-weight: 400;
	margin: 5px;
	text-indent: 0;
	scrollbar-3d-light-color:#C1B5A6;
scrollbar-arrow-color:#C1B5A6;
scrollbar-base-color:black;
scrollbar-dark-shadow-color:#333333;
scrollbar-face-color:#000000;
scrollbar-highlight-color:#333333;
scrollbar-shadow-color:black
}

.ChatTable
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	background-color: #333333;
	color: #000000;
	font-size: <?php echo($medium); ?>pt;
	font-weight: 400;
}

.ChatTabTitle
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	background-color: #000000;
	color: #FFFFFF;
	font-size: <?php echo($medium); ?>pt;
	font-weight: 800;
}

TR.ChatCell, TD.ChatCell, TH.ChatCell
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	color: #000000;
	font-size: <?php echo($medium); ?>pt;
	font-weight: 400;
}

TH.ChatCell
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	font-weight: 800;
}

<?php
if (isset($SpecialFont))
{
	?>
	A.ChatFonts
	{
		<?php if (isset($FontFace)) echo($FontFace); ?>
		text-decoration: underline;
		color: #FF0000;
		font-weight: 600;
		cursor:pointer;
	}

	A.ChatFonts:hover, A.ChatFonts:active
	{
		<?php if (isset($FontFace)) echo($FontFace); ?>
		color: #FF0000;
		text-decoration: none;
		cursor:pointer;
	}
	<?php
};
?>

A.ChatLink
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	text-decoration: underline;
	color: #FFFFFF;
	font-weight: 600;
	cursor:pointer;
}

A.ChatLink:hover, A.ChatLink:active
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	color: #FF9900;
	text-decoration: none;
	cursor:pointer;
}

A.ChatReg
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	text-decoration: underline;
	color: #000000;
	font-weight: 800;
	cursor:pointer;
}

A.ChatReg:hover,A.ChatReg:active
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	color: #FF9900;
	text-decoration: none;
	cursor:pointer;
}

INPUT.ChatBox, SELECT.ChatBox, TEXTAREA.ChatBox
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	background: #333333;
}

.ChatTitle
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	color: #333333;
	font-size: <?php echo($large); ?>pt;
	font-weight: 800;
}

.ChatError
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	font-size: <?php echo($medium); ?>pt;
	font-weight: 800;
	color: #FF0000;
}

.ChatCopy
{
	font-family: helvetica, arial, geneva, sans-serif;
	unicode-bidi: embed;
	color: #333333;
	font-size: 8pt;
}

A.ChatCopy, A.ChatCopy:active
{
	font-family: helvetica, arial, geneva, sans-serif;
	color: #FFFFFF;
	cursor:pointer;
}

.ChatP1
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	font-size: <?php echo($medium); ?>pt;
	color: #FFFFFF;
}

.ChatP2
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	font-size: <?php echo($medium); ?>pt;
	color: #000000;
}

.ChatP3
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	font-size: <?php echo($medium); ?>pt;
	font-weight: 600;
	color: #333333;
}

.ChatFlags
{
	<?php if (isset($FontFace)) echo($FontFace); ?>
	color: #000000;
	font-size: 10pt;
	font-weight: 400;
}