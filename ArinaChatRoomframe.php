<?php 
session_start();
require_once("mysql_connect.inc.php");
require_once("config.php"); 
require_once("inc/function.php");
$guest_ip = $_SERVER['REMOTE_ADDR'];
$chatname = $_POST['chatname1'];
setcookie("chatname1",$_POST['chatname1'])

?>

<!doctype html>
<html>
<head>

<title>ARINA Early Access List</title>
    <link rel="shortcut icon" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
	<link rel="Bookmark" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
<frameset rows="80%,*"> 
<frame src=" ArinaChatRoom.php" name="chatdisplay"> 
<frame src="ArinaChatRoomSent1.php" name="speak"> 
</frameset> 

</html>

