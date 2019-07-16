<?php 
session_start(); 
require_once("mysql_connect.inc.php");
require_once("config.php");
require_once("inc/function.php");
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>Arina Blockchain Game Universe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/custom.js"></script>
    <link rel="shortcut icon" href="http://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
	<link rel="Bookmark" href="http://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />

</head>

<body>
	<div class="container">
		<center><a href="index.html" class="image fit"><img src="images/logo-2.png" width="50%" alt="Arina Blockchain Game Universe" class="smallscreen"></a></center>
		<hr><size=5>
		<?php
			$code = ChatRoom($_POST['chatname'],$_POST['conversation'],$_POST['emoji'],$_POST['guest_ip']);
			switch($code)
			{
				case 0:
					echo "<div class='alert alert-success' role='alert'>
							<b>未輸入名字</b>
						</div>";
					echo "<meta http-equiv=REFRESH CONTENT=2;url=ArinaChatRoom.php>";
				break;
				case 1:
					echo "<div class='alert alert-success' role='alert'>
							<b>未輸入發言</b>
						</div>";
					echo "<meta http-equiv=REFRESH CONTENT=2;url=ArinaChatRoom.php>";
				break;
				case 2:
					echo "<div class='alert alert-success' role='alert'>
							<b>未輸入表情</b>
						</div>";
					echo "<meta http-equiv=REFRESH CONTENT=2;url=ArinaChatRoom.php>";
				break;
				case 3:
					echo "<div class='alert alert-success' role='alert'>
							<b>發言成功</b>
						</div>";
					echo "<meta http-equiv=REFRESH CONTENT=2;url=ArinaChatRoom.php>";
				break;
				case 4:
					echo "<div class='alert alert-success' role='alert'>
							<b>發言失敗，系統錯誤</b>
						</div>";
					echo "<meta http-equiv=REFRESH CONTENT=2;url=ArinaChatRoom.php>";
				break;
				}
		?>
		<hr><size=5>
	</div>
</body>

</html>