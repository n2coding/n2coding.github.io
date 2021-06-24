<?php
if (isset($_GET["L"])) $L = $_GET["L"];

// Fix a security hole
if (isset($L) && !is_dir("./localization/".$L)) exit();

require("./config/config.lib.php");
require("./localization/".$L."/localized.chat.php");
header("Content-Type: text/html; charset=${Charset}");
?>
<!DOCTYPE html>
<HTML dir="<?php echo(($Align == "right") ? "RTL" : "LTR"); ?>">
<HEAD>
	<TITLE>Blank title</TITLE>
</HEAD>
<BODY>
	<!-- Not a blank document ;) -->
</BODY>
</HTML>