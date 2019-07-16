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
    <link rel="shortcut icon" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
	<link rel="Bookmark" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
</head>
<body class="events-news-page">
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="index.php"><img src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="arina_universe.php">Arina Universe</a></li>
                            <!-- <li><a href="#">Games</a></li> -->
                            <li><a href="CheckYourEarlyAccess.php">Check Early Access</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <a class="btn gradient-bg" href="https://www.facebook.com/GlobalIdolCoin">酷紅幣FB粉絲團</a>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header events-news-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Arina Blockchain Game Universe</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->

<div class="container">
    <div class="row">
        <div class="col-12">
            <article class="events-news-post">
                <header class="entry-header">
                    <h2 class="entry-title">橋本有菜野球拳</h2>

                    <div class="entry-meta flex align-items-center">
                        <div class="posted-author">Arina Yakyuken</div>

                        <div class="post-comments">December 5, 2018</div>
                    </div>
                </header>

                <figure>
                    <a href="https://www.arinamillion.com/arinanew"><img src="images/news-1.jpg" alt=""></a>

                    <div class="posted-date"><span>Dec</span><span>5</span><span>‘18</span></div>
                </figure>

                <div class="entry-content">
                    <p>猜拳挖礦新概念！總量8400萬顆ARINA，等你來搶挖！透過經典猜拳遊戲來和ARINA一決勝負，玩家勝利後可獲得GIC及ARINA，這也是取得ARINA唯一的方法，也是開啟ARINA宇宙的起手式！每次猜拳還可抽樂透大獎，最高可獲得20ETH！</p>
                </div>
            </article>

            <article class="events-news-post">
                <header class="entry-header">
                    <h2 class="entry-title">ARINA地產大亨</h2>

                    <div class="entry-meta flex align-items-center">
                        <div class="posted-author">ARINA LAND TYCOON</div>

                        <div class="post-comments">Jan 10, 2019</div>
                    </div>
                </header>

                <figure>
                    <a href="http://www.arinatycoon.com"><img src="images/news-2.jpg" alt=""></a>

                    <div class="posted-date"><span>Jan</span><span>10</span><span>‘19</span></div>
                </figure>

                <div class="entry-content">
                    <p>在16個節點城市裡，共有1600個區塊鏈土地，玩家將用運氣及膽識來競逐最豐富的地產，初期必須使用ARINA購買未開發土地，當其他玩家路過你的土地時，你便可獲得豐厚的過路費，而支付過路費的玩家也可隨機抽彩蛋取得遊戲資源，同時另可以抽樂透大獎，獲獎者可取得大獎池中10%的ETH獎金，每當有玩家使用ETH購買土地和支付過路費時，有一部分的ETH會計入大獎池中，當大獎池不斷累積後，玩家每次擲骰都會是精彩刺激的一刻！</p>
                </div>
            </article>

            <article class="events-news-post">
                <header class="entry-header">
                    <h2 class="entry-title">ARINA競馬大亨</h2>

                    <div class="entry-meta flex align-items-center">
                        <div class="posted-author">ARINA WINNING</div>

                        <div class="post-comments">June 1, 2019</div>
                    </div>
                </header>

                <figure>
                    <a href="#"><img src="images/news-3.jpg" alt=""></a>

                    <div class="posted-date"><span>Jun</span><span>1</span><span>‘19</span></div>
                </figure>

                <div class="entry-content">
                    <p>享受眾馬競逐的快感！更可獲得豐厚的彩金，使用區塊鏈智能合約計算每匹馬的腳力及耐力，讓投注更公正公平，而當玩家擁有的賽馬出賽獲勝時，更能享受不斷獲取的靜態收入，就算你不想在僥倖的博弈中聽天由命，只要買一匹賽馬！就可以不斷的讓自己獲得回報，當然，你要有非常優秀的眼光來挑選為你出戰的馬兒！</p>
                </div>
            </article>
        </div>
    </div>


</div>

<div class="newsletter-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <header class="entry-header">
                    <h2 class="entry-title">EARLY ACCESS Registration(早鳥優惠註冊)</h2>
                    <p>遊戲上線啟動前優先註冊可獲得額外酷紅幣 500 GICT，每個地址及email帳號限獲得一次，並於每個遊戲啟動後陸續發放！本次早鳥優惠期限為2018年12月5日，啟動的遊戲為橋本有菜野球拳。於遊戲啟動後才註冊早鳥優惠的玩家會計入下次新遊戲的早鳥優惠活動。</p>
                </header>

                <div class="newsletter-form">
                    <form name="form" method="post" action="early_access.php"  class="flex flex-wrap justify-content-center align-items-center">
                        <div class="col-md-12 col-lg-3">
                            <input type="text" name="username" placeholder="Name">
                        </div>

                        <div class="col-md-12 col-lg-6">
                            <input type="email" name="email"  placeholder="Your e-mail">
                        </div>
						
                        <div class="col-md-12 col-lg-6">
                            <input type="text" name="ETH_Address"  placeholder="Your ETH Address (0X123456789...)">
                        </div>

                        <div class="col-md-12 col-lg-3">
                            <input class="btn gradient-bg" type="submit" name="Subscribe" value="早鳥註冊">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="footer-logo">
                    <a href="#"><img src="images/logo.png" alt="logo"></a>
                </figure>



                
Copyright &copy; 2018.GIC-COIN All rights reserved.


                <div class="footer-social">
                    <ul class="flex flex-wrap justify-content-center align-items-center">
                        <li><a href="https://www.gic-coin.com"><i class="fa fa-globe"></i></a></li>
                        <li><a href="https://www.facebook.com/GlobalIdolCoin"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/GIC48226830?lang=zh-tw"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>