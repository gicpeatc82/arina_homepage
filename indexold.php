<?php 
session_start();
$guest_ip = $_SERVER['REMOTE_ADDR'];


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
    <link rel="stylesheet" href="styleold.css">  
    <link rel="shortcut icon" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
    <link rel="Bookmark" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />

  </head>
  <body>
    <!------------頁首圖片-------------------------------------->
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

                  <!------------導覽列-------------------------------------->
                    <div class="col-2 col-lg-7 order-3 order-lg-2">
                        <nav class="site-navigation">
                            <!-- <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>.hamburger-menu -->

                            <ul>
                                <li><a href="index.php" data-i18n-text="home"></a></li>
                                <li><a href="arina_universe.php" data-i18n-text="universe"></a></li>
                                <!-- <li><a href="#">Games</a></li> -->
                                <li><a href="CheckYourEarlyAccess.php" data-i18n-text="earlyAccess"></a></li>
                            </ul>
                        </nav><!-- .site-navigation -->
                    </div><!-- .col -->

                    <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                        <div class="buy-tickets">
                            <a class="btn gradient-bg" href="https://www.facebook.com/GlobalIdolCoin" data-i18n-text="fb"></a>
                        </div><!-- .buy-tickets -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .header-bar -->

      
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide" data-date="2018/12/05 20:00" style="background: url('images/header-bg.jpg') no-repeat">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col flex flex-column justify-content-center">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><br><br><br></h2>
                                    </div><!--- .entry-header -->

                                    <div class="entry-footer">
                                        <a class="btn gradient-bg" href="https://www.arinamillion.com/arinanew" data-i18n-text="BaseballFist"></a><br><br><br>
                                    </div><!-- .entry-footer" -->
                                </div><!-- .col -->
                            </div><!-- .container -->
                        </div><!-- .hero-content -->
                    </div><!-- .swiper-slide -->
                </div><!-- .swiper-wrapper -->

                <div class="swiper-slide" data-date="2018/12/05 20:00" style="background: url('images/header-bg2.jpg') no-repeat">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col flex flex-column justify-content-center">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><br><br>ARINA Yakyuken<br>December 5, 2018<br>
                                    </div><!--- .entry-header -->

                                    <div class="entry-footer">
                                        <a class="btn gradient-bg" href="https://www.arinamillion.com/arinanew">Play Now</a>
                                    </div><!-- .entry-footer" -->
                                </div><!-- .col -->
                            </div><!-- .container -->
                        </div><!-- .hero-content -->
                    </div><!-- .swiper-slide -->
                </div><!-- .swiper-wrapper -->

                <div class="swiper-slide" data-date="2019/01/10 20:00" style="background: url('images/header-bg3.jpg') no-repeat">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col flex flex-column justify-content-center">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><br><br>ARINA Land Tycoon<br>January 10, 2019<br>
                                    </div><!--- .entry-header -->

                                    <div class="entry-footer">
                                        <a class="btn gradient-bg" href="http://www.arinatycoon.com">Play Now</a>
                                    </div><!-- .entry-footer" -->
                                </div><!-- .col -->
                            </div><!-- .container -->
                        </div><!-- .hero-content -->
                    </div><!-- .swiper-slide -->
                </div><!-- .swiper-wrapper -->
          
                <div class="swiper-slide" data-date="2019/03/31 20:00" style="background: url('images/header-bg4.jpg') no-repeat">
                    <div class="hero-content">
                        <div class="container">
                            <div class="row">
                                <div class="col flex flex-column justify-content-center">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><br><br> <br> <br>
                                    </div><!--- .entry-header -->

                                    <div class="entry-footer">
                                        <a class="btn gradient-bg" href="https://www.arinamillion.com/arinatycoonnew/scratch/">Play Now</a>
                                    </div><!-- .entry-footer" -->
                                </div><!-- .col -->
                            </div><!-- .container -->
                        </div><!-- .hero-content -->
                    </div><!-- .swiper-slide -->
                </div><!-- .swiper-wrapper -->
            </div>
        
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Add Arrows -->
            <div class="swiper-button-next flex justify-content-center align-items-center">
                <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
            </div>

            <div class="swiper-button-prev flex justify-content-center align-items-center">
                <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
            </div>
        </div><!-- .swiper-container -->
    </header><!-- .site-header -->
    <!------------酷紅幣區塊鏈遊戲系列------------------------------>
    <div class="homepage-info-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-5">
                    <figure>
                        <img src="images/logo-2.png" alt="logo">
                    </figure>
                </div>

                <div class="col-12 col-md-8 col-lg-7">
                    <header class="entry-header">
                        <h2 class="entry-title" data-i18n-text="blockgames"></h2>
                    </header>

                    <div class="entry-content">
                        <p data-i18n-text="blockgamesContext"></p>
                    </div>

                    <footer class="entry-footer">
                        <a href="https://zh.wikipedia.org/wiki/%E5%8C%BA%E5%9D%97%E9%93%BE" class="btn gradient-bg" data-i18n-text="blockWiki"></a>
                        <a href="https://zh.wikipedia.org/wiki/%E6%99%BA%E8%83%BD%E5%90%88%E7%BA%A6" class="btn dark" data-i18n-text="contractWiki"></a>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <div class="homepage-featured-events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-events-wrap flex flex-wrap justify-content-between">
                        <div class="event-content-wrap positioning-event-1">
                            <figure>
                                <a href="https://www.arinamillion.com/arinanew"><img src="images/1.jpg" alt="1"></a>
                            </figure>

                            <header class="entry-header">
                                <h3 class="entry-title">Arina Yakyuken</h3>

                                <div class="posted-date">December 5, 2018</div>
                            </header>
                        </div>

                        <div class="event-content-wrap positioning-event-2">
                            <figure>
                                <a href="#"><img src="images/2.jpg" alt=""></a>
                            </figure>

                            <header class="entry-header">
                                <h3 class="entry-title">ARINA WINNING</h3>

                                <div class="posted-date">June, 2019</div>
                            </header>
                        </div>

                        <div class="event-content-wrap positioning-event-3">
                            <figure>
                                <a href="#"><img src="images/3.jpg" alt=""></a>
                            </figure>

                            <header class="entry-header">
                                <h3 class="entry-title">ARINA ZOMBINAWA</h3>

                                <div class="posted-date">August, 2019</div>
                            </header>
                        </div>

                        <div class="event-content-wrap positioning-event-4 half">
                            <figure>
                                <a href="#"><img src="images/events-in-london.jpg" alt=""></a>
                            </figure>
                        </div>

                        <div class="event-content-wrap positioning-event-5 half">
                            <figure>
                                <a href="#"><img src="images/check-july.png" alt=""></a>
                            </figure>
                        </div>

                        <div class="event-content-wrap positioning-event-6 half">
                            <figure>
                                <a href="#"><img src="images/summer-festivals.jpg" alt=""></a>
                            </figure>
                        </div>

                        <div class="event-content-wrap positioning-event-7">
                            <figure>
                                <a href="#"><img src="images/90.jpg" alt=""></a>
                            </figure>

                            <header class="entry-header">
                                <h3 class="entry-title">ARINA Monster farm</h3>

                                <div class="posted-date">Comming soon...</div>
                            </header>
                        </div>

                        <div class="event-content-wrap positioning-event-8">
                            <figure>
                                <a href="https://www.arinatycoon.com"><img src="images/modern.jpg" alt="1"></a>
                            </figure>

                            <header class="entry-header">
                                <h3 class="entry-title">Arina Land Tycoon</h3>

                                <div class="posted-date">January 10, 2019</div>
                            </header>
                        </div>

                        <div class="event-content-wrap positioning-event-9">
                            <figure>
                                <a href="https://www.arinamillion.com/arinatycoonnew/scratch/"><img src="images/smoke.jpg" alt=""></a>
                            </figure>

                            <header class="entry-header">
                                <h3 class="entry-title">ARINA Lotto Scratch</h3>

                                <div class="posted-date">Play Now</div>
                            </header>
                        </div>

                        <div class="event-content-wrap positioning-event-10 half">
                            <figure>
                                <a href="#"><img src="images/summer-festival.jpg" alt=""></a>
                            </figure>
                        </div>

                        <div class="event-content-wrap positioning-event-11 half">
                            <figure>
                                <a href="#"><img src="images/autumn.jpg" alt=""></a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="homepage-next-events">
        <div class="container">
            <div class="row">
                <div class="next-events-section-header">
                    <p>近期即將推出的遊戲！你準備好要接招了嗎！酷紅幣團隊預計將為橋本有菜開發一系列１２款區塊鏈遊戲，讓橋本有菜遊戲宇宙產生獨有的遊戲生態鏈，每位玩家及粉絲都能享受系列遊戲帶來的樂趣。</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="next-event-wrap">
                        <figure>
                            <a href="https://www.arinamillion.com/arinanew"><img src="images/next1.jpg" alt="1"></a>

                            <div class="event-rating">12/5</div>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">橋本有菜野球拳</h3>

                            <div class="posted-date">Arina Yakyuken <span>December 5, 2018</span></div>
                        </header>

                        <div class="entry-content">
                            <p>猜拳挖礦新概念！總量8400萬顆ARINA，等你來搶挖！透過經典猜拳遊戲來和ARINA一決勝負，玩家勝利後可獲得GIC及ARINA，這也是取得ARINA唯一的方法，也是開啟ARINA宇宙的起手式！每次猜拳還可抽樂透大獎，最高可獲得20ETH！</p>
                        </div>


                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="next-event-wrap">
                        <figure>
                            <a href="http://www.arinatycoon.com"><img src="images/next2.jpg" alt="1"></a>

                            <div class="event-rating">1/1</div>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">ARINA地產大亨</h3>

                            <div class="posted-date">ARINA LAND TYCOON <span>Jan 10, 2019</span></div>
                        </header>

                        <div class="entry-content">
                            <p>在16個節點城市裡，共有1600個區塊鏈土地，玩家將用運氣及膽識來競逐最豐富的地產，初期必須使用ARINA購買未開發土地，當其他玩家路過你的土地時，你便可獲得豐厚的過路費，而支付過路費的玩家也可隨機抽彩蛋取得遊戲資源，同時另可以抽樂透大獎，獲獎者可取得大獎池中10%的ETH獎金，每當有玩家使用ETH購買土地和支付過路費時，有一部分的ETH會計入大獎池中，當大獎池不斷累積後，玩家每次擲骰都會是精彩刺激的一刻！</p>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="next-event-wrap">
                        <figure>
                            <a href="#"><img src="images/next3.jpg" alt="1"></a>

                            <div class="event-rating">6/1</div>
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">ARINA競馬大亨</h3>

                            <div class="posted-date">ARINA WINNING <span>June 1, 2019</span></div>
                        </header>

                        <div class="entry-content">
                            <p>享受眾馬競逐的快感！更可獲得豐厚的彩金，使用區塊鏈智能合約計算每匹馬的腳力及耐力，讓投注更公正公平，而當玩家擁有的賽馬出賽獲勝時，更能享受不斷獲取的靜態收入，就算你不想在僥倖的博弈中聽天由命，只要買一匹賽馬！就可以不斷的讓自己獲得回報，當然，你要有非常優秀的眼光來挑選為你出戰的馬兒！</p>
                        </div>

    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="newsletter-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h2 class="entry-title">EARLY ACCESS Registration(早鳥優惠註冊)</h2>
                        <p>遊戲上線啟動前優先註冊可獲得額外酷紅幣 500 GICT，每個地址及email帳號限獲得一次，並於每個遊戲啟動後陸續發放！本次早鳥優惠期限為2019年1月10日，啟動的遊戲為ARINA地產大亨。於遊戲啟動後才註冊早鳥優惠的玩家會計入下次新遊戲的早鳥優惠活動。</p>
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

    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    <script type="text/javascript" src="js/jquery.i18n.properties.js"></script>
    <script type="text/javascript" src="js/common_i18n.js"></script>
  </body>
</html>