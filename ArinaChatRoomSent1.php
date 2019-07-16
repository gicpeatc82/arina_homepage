<?php 
session_start();
require_once("mysql_connect.inc.php");
require_once("config.php"); 
require_once("inc/function.php");
$guest_ip = $_SERVER['REMOTE_ADDR'];
$chatname = $_POST['chatname1'];
setcookie("chatname1",$_POST['chatname1'])
?>
<html> 
<head> 
<title>发言</title> 
</head> 
<body> 
		<?php
			$code = ChatRoom($_POST['chatname'],$_POST['conversation'],$_POST['emoji'],$_POST['guest_ip']);
			switch($code)
			{
				case 0:
					echo "<div class='alert alert-success' role='alert'>
							<b>未輸入名字</b>
						</div>";
				break;
				case 1:
					echo "<div class='alert alert-success' role='alert'>
							<b>未輸入發言</b>
						</div>";
				break;
				case 2:
					echo "<div class='alert alert-success' role='alert'>
							<b>未輸入表情</b>
						</div>";
				break;
				case 3:
					echo "<div class='alert alert-success' role='alert'>
							<b>發言成功</b>
						</div>";
				break;
				case 4:
					echo "<div class='alert alert-success' role='alert'>
							<b>發言失敗，系統錯誤</b>
						</div>";
				break;
				}
		?>
<form action="ArinaChatRoomSent1.php" method="post" target=" _self"> 
<input type="text" name="chatname" value="<?php echo $HTTP_COOKIE_VARS["chatname1"];?>" readonly="readonly"/>
<input type="text" name="conversation"  placeholder="">
<select type="text" name="emoji">
		<option value='0'>請選擇表情－
		<option value='1'>微笑
		<option value='2'>心靜如水
		<option value='3'>大怒
		<option value='4'>哭哭
		<option value='5'>開懷大笑
		<option value='6'>羨慕
		<option value='7'>噴口水
<input type="text" name="guest_ip" value="<?php echo $guest_ip;?>" readonly="readonly"/>
<input type="submit" name="Subscribe" value="發言">

</form> 
</body> 
</html> 