<?php 
session_start(); 
require_once("mysql_connect.inc.php");
require_once("config.php");
require_once("inc/function.php");
$guest_ip = $_SERVER['REMOTE_ADDR'];
$game = 3;

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
		<center><a href="index.php" class="image fit"><img src="images/logo-2.png" width="50%" alt="Arina Blockchain Game Universe" class="smallscreen"></a></center>
		<hr><size=5>
		<?php
			$code = early_access($_POST['username'],$_POST['email'],$_POST['ETH_Address'],$guest_ip,$game);
			switch($code)
			{
				case 0:
					echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php?err=1>";
				break;
				case 1:
					echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php?err=2>";
				break;
				case 2:
					echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php?err=3>";
				break;
				case 3:
					echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php?err=4>";
				break;
				case 4:
					echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php?err=5>";
				break;
				case 5:
					echo "<div class='alert alert-success' role='alert'>
							<b>早鳥優惠已經送出，請耐心等待下一次新遊戲啟動！(2019 5/1 -ARINA賽車-)</b>
						</div>";
					echo "<meta http-equiv=REFRESH CONTENT=2;url=index.php>";
				break;
				case 6:
					echo "<div class='alert alert-success' role='alert'>
							<b>早鳥優惠申請錯誤，請再重新申請一次！</b>
						</div>";
					echo "<meta http-equiv=REFRESH CONTENT=2;url=index.php?err=6>";	
				break;
				case 7:
					echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php?err=7>";
				break;
				case 8:
					echo "<meta http-equiv=REFRESH CONTENT=0;url=index.php?err=8>";
				break;
				}
		?>
		<hr><size=5>
	</div>
</body>

</html>