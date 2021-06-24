<?php

/*
    Program E
	Copyright 2002, Paul Rydell

	This file is part of Program E.

	Program E is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    Program E is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Program E; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/**
 * Preferences file
 *
 * Contains the preferences settings for the database and the application itself. Constants
 * and the main MySQL connection.
 * @author Paul Rydell
 * @author Anne Kootstra
 * @copyright 2002 & 2004
 * @version 0.0.8
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @package Settings
 */

/**
 * Update for MySQLi support in php5 versions and later.
 * @author Ciprian Murariu
 * @copyright 2016
 * @version 0.0.9
*/

// Turn this off in case people have it on.
if(function_exists('set_magic_quotes_runtime') && version_compare(PHP_VERSION, '5.3.0') < 0) set_magic_quotes_runtime(0);
else ini_set("magic_quotes_runtime", 0);

// Can't turn off magic quotes gpc so just redo what it did if it is on.
if (function_exists('get_magic_quotes_gpc') && @get_magic_quotes_gpc()) {
	foreach($_GET as $k=>$v)
		$_GET[$k] = stripslashes($v);
	foreach($_POST as $k=>$v)
		$_POST[$k] = stripslashes($v);
	foreach($_COOKIE as $k=>$v)
		$_COOKIE[$k] = stripslashes($v);
}

/**
* The errormessage when a loop is detected.
*/
define("LOOPINGERRORMSG", "Oops. I wasn't paying attention. Tell me again what is going on.");

/**
* The number of times a loop may occur before the error is thrown. -1 equals to no limit.
*/
define("LOOPINGLIMIT",250); // -1 for no limit

/**
* Has something to do with the random generator
*/
define("RANDOMCHANCECLEAN",100); // -1 to never check

/**
* the amount of minutes certain data needs to be kept.
*/
define("MINUTESTOKEEPDATA",120); // -1 to keep forever

/**
* Minutes to keep the chat log, standard set to -1, meaning forever.
*/
define("MINUTESTOKEEPCHATLOG",-1); // -1 to keep forever

/**
* standard value when a user predicate hasn't been set.
*/
define("DEFAULTPREDICATEVALUE", "");


/**
* wether or not to use the response caching mechanism. 1=yes, 0=no
*/
define('CACHE_CONTROL', 0);

/**
* version number of the application.
*/
define("PROGRAMEVERSION","v0.09");

// This is where all the AIML and startup.xml resides
$rootdir="aiml/";

$errors="";

if(!defined("C_DB_HOST")) include("./config/config.lib.php");
// Added for php5 and later support of mysqli and mariadb libraries
$cdbtype = C_DB_TYPE;
if($cdbtype == "mysqli" || $cdbtype == "mariadb"){
	if(C_DB_TYPE == "mysqli") $conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect(C_DB_HOST.(C_DB_PORT != "" && C_DB_PORT != "3306" ? ":".C_DB_PORT : ""), C_DB_USER, C_DB_PASS, C_DB_NAME)) or $errors = $errors . mysqli_connect_error()."\n";
	elseif(C_DB_TYPE == "mariadb") $conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect(C_DB_HOST, C_DB_USER, C_DB_PASS, C_DB_NAME, (C_DB_PORT != "" ? C_DB_PORT : "3306"))) or $errors = $errors . mysqli_connect_error()."\n";
	mysqli_query($conn, "SET CHARACTER SET utf8mb4"); 
	mysqli_query($conn, "SET NAMES 'utf8mb4'"); 
	mysqli_set_charset($conn, "utf8mb4");
	#((bool)mysqli_query($conn, "USE " . constant('C_DB_NAME'))) or $errors = $errors . "Unable to select database\n"; 
	if(C_DB_TYPE == "mariadb") $cdbtype = "mysqli";
	}
else{
	$conn = mysql_connect(C_DB_HOST.(C_DB_PORT != "" && C_DB_PORT != "3306" ? ":".C_DB_PORT : ""),C_DB_USER,C_DB_PASS) or $errors = $errors . "Could not connect to database.\n";
	@mysql_query("SET CHARACTER SET utf8mb4");
	@mysql_query("SET NAMES 'utf8mb4'");
	@mysql_set_charset("utf8mb4", $conn);
	mysql_select_db(C_DB_NAME) or $errors = $errors . "Unable to select database\n";
}
?>