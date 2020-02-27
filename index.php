<?php 
session_start();
$guest_ip = $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
        <title>Arina Blockchain Game Universe</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
        <link rel="Bookmark" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />

        <script src="js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
    <!------header-------------------->
        <header id="header">
            <div id="navber">
            <div class="toggle-navber"></div>

            <nav class="navbar navbar-expand-md navbar-dark">

                <div class="navbar-brand" id="logo">
                    <img src="images/1MenuMain/ARINAUNIVERSELOGO.png" alt="logo">
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        
                        <li class="nav-item nav-item-main">
                            <span class="nav-link"><a href="#top" >ARINA UNIVERSE</a></span>
                        </li>
                        
                        <li class="nav-item nav-item-dapp nav-item-main">
                            <span class="nav-link" id="dapp-selection"><a style="color:#fff;" data-i18n-text="dapp"></a></span>
                            <ul class="list-unstyled">
                                <li><a href="http://www.arinamillion.com/arinanew/">ARINA YAKYUKEN</a></li>
                                <li><a href="http://www.arinamillion.com/arinatycoonnew/scratch/">ARINA SCRATCH</a></li>
                                <li><a href="http://www.arinatycoon.com/maingame.php">ARINA LAND TYCOON</a></li>
                                <li><a href="https://www.arinatycoon.com/tron_racer_testnet/">TRON RACER</a></li>
                            </ul>
                        </li>
                        
                        <li class="nav-item nav-item-hide">
                            <span class="nav-link"><a href="https://www.arinamillion.com/arinanew/">ARINA YAKYUKEN</a></span>
                        </li>

                        <li class="nav-item nav-item-hide">
                            <span class="nav-link"><a href="https://www.arinamillion.com/arinatycoonnew/scratch/">ARINA SCRATCH</a></span>
                        </li>

                        <li class="nav-item nav-item-hide">
                            <span class="nav-link"><a href="http://www.arinatycoon.com/maingame.php">ARINA LAND TYCOON</a></span>
                        </li>

                        <li class="nav-item nav-item-main">
                            <span class="nav-link"><a href="" data-i18n-text="contact"></a></span>
                        </li>
                    
                        <li class="nav-item">
                            <span class="social">
                                <a href="https://www.facebook.com/GlobalIdolCoin/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/GIC48226830"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/taiwan_gic/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="https://www.youtube.com/channel/UCm5YE9imTe4LVGOJrSpoJ2g/featured?view_as=subscriber"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </span>
                        </li>
                        
                        <li class="nav-item">
                            <select id="language" class="selectpicker form-control form-control-sm" data-width="auto" data-style="btn-primary" name="language" onchange="changelang()">
                                <option value="en">ENG</option>
                                <option value="zh_TW">TW</option>
                                <option value="zh_CN">CN</option>
                            </select> 
                        </li>
                    </ul>
                </div>
                </nav>
            </div>

            <div class="container" id="top">
                <div class="row">
                    <div id="header-left" class="col-sm-8">
                        <h5 class="button0" data-i18n-text="firstGame"></h5>
                        <img src="images/1MenuMain/ARINAUNIVERSELOGO.png" alt="logo">
                    </div>
                    <div id="header-right" class="col-sm-4">
                    </div>
                </div>
            </div>
        </header>

        <div id="middle-part">
    <!-------arina-info------------------------------>
            <section id=arina-info>
                <div class="container">
                    <div class="row" id="arina-info-top">
                        <div id="info-img" class="col-sm-10 col-md-5">
                            <div class="info-img-item" id="info-img-item1">
                                <img src="images/2WhatisARINAUNIVERSE/ARINALOGO.png" alt="">
                            </div>
                            <div class="info-img-item" id="info-img-item2">
                                <img src="images/2WhatisARINAUNIVERSE/GIClogo.png" alt="">
                            </div>
                            
                        </div>
                        <div id="info-top-context" class="col-sm-12 col-md-7">
                            <h4 data-i18n-text="arinaUniverse"></h4>
                            <p data-i18n-text="arinaUniverseInfo"></p>
                        </div>
                    </div>

                    <div class="row" id="arina-info-down">
                        <div class="info-item col-sm-12 col-md-4">
                            <div class="info-context">
                                <div class="info-context-img">
                                    <img src="images/2WhatisARINAUNIVERSE/ERC-20.png" alt="">
                                </div>
                                <h5 data-i18n-text="erc20"></h5>
                                <p data-i18n-text="erc20Context"></p>
                            </div>
                        </div>
                        <div class="info-item col-sm-12 col-md-4">
                            <div class="info-context">
                                <div class="info-context-img">
                                    <img src="images/2WhatisARINAUNIVERSE/ERC-721.png" alt="">
                                </div>
                                <h5 data-i18n-text="erc721"></h5>
                                <p data-i18n-text="erc721Context"></p>
                            </div>
                        </div>
                        <div class="info-item col-sm-12 col-md-4">
                            <div class="info-context">
                                <div class="info-context-img">
                                    <img src="images/2WhatisARINAUNIVERSE/AI.png" alt="">
                                </div>
                                <h5 data-i18n-text="funAi"></h5>
                                <p data-i18n-text="funAiContext"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
    <!--------arina-dapp------------------------------------------------>
            <section id="arina-dapp">
                <div class="container">
                    <div class="row">
                        <div id="arina-dapp-img" class="col-sm-12 col-md-8">
                            <div class="dapp-img" id="dapp-img-left">
                                <a class="dapp-img-a" id="dapp-img-1" href="https://www.arinamillion.com/arinanew/">
                                    <img src="images/3OurDAPP/ARINAYAKYUKEN.png" alt="">
                                    <span class="dapp-game-name">ARINA YAKYUKEN</span> 
                                    <span class="dapp-start-time">Dec 5 2018</span>
                                </a>

                                <a class="dapp-img-a" id="dapp-img-2" href="https://www.arinamillion.com/arinatycoonnew/scratch/">
                                    <img  src="images/3OurDAPP/ARINASCRATCH.png" alt="">
                                    <span class="dapp-game-name">ARINA SCRATCH</span> 
                                    <span class="dapp-start-time">Mar 28 2019</span>
                                </a>
                            </div>

                            <div class="dapp-img" id="dapp-img-right">
                                <div></div>
                                <a class="dapp-img-a" id="dapp-img-3" href="http://www.arinatycoon.com/maingame.php">
                                    <img src="images/3OurDAPP/ARINALANDTYCOON.png" alt="">
                                    <span class="dapp-game-name">ARINA LAND TYCOON</span> 
                                    <span class="dapp-start-time">Jun 6 2019</span>
                                </a>

                                <a class="dapp-img-a" id="dapp-img-4" href="">
                                    <img src="images/3OurDAPP/TRONRACER.png" alt="">
                                    <span class="dapp-game-name">TRON RACER</span> 
                                    <span class="dapp-start-time">Feb 20 2020</span>
                                </a>
                            </div>
                        </div>

                        <div id="arina-dapp-context"  class="col-sm-12 col-md-4">
                            <h5 data-i18n-text="arinaDapp"></h5>
                            <p data-i18n-text="arinaDappContext"></p>
                        </div>
                    </div>

                    <div class="row future-games">
                        <div class="future-games-item">
                            <img src="images/3OurDAPP/ARINAHUNTERS.png" alt="">
                            <span class="dapp-future-game">ARINA HUNTERS</span> 
                            <span class="dapp-comming">COMMING SOON</span>         
                        </div>
                        <div class="future-games-item">
                            <img src="images/3OurDAPP/ARINASPEED.png" alt="">
                            <span class="dapp-future-game">ARINA SPEED</span>
                            <span class="dapp-comming">COMMING SOON</span>
                        </div>
                        <div class="future-games-item">
                            <img src="images/3OurDAPP/ARINACASINO.png" alt="">
                            <span class="dapp-future-game">ARINA CASINO</span>
                            <span class="dapp-comming">COMMING SOON</span>
                        </div>
                        <div class="future-games-item">
                            <img src="images/3OurDAPP/ARINAZombinawa.png" alt="">
                            <span class="dapp-future-game">ARINA ZOMBINAWA</span>
                            <span class="dapp-comming">COMMING SOON</span>
                        </div>
                    </div>
                    <div id="second-title">
                        <img src="images/3OurDAPP/ARINALOGO.png" alt="">
                    </div>
                </div>
            </section>
                
    <!--------arina-video------------------------------------------------>
            <section class="ss-model arina-video-top">
                <p>ARINA YAKYUKEN</p>
            </section>

            <section id="arina-video">
                <img src="images/4ARINAYAKYUKEN/VideoARINAYAKYUKEN.png" alt="">
                <div class="arina-video-container clearfix">
                    <div class="row">
                        <div class="col-sm-10 col-md-7 arina-video-left ">
                            <h1 id="arina-video-title">ARINA YAKYUKEN</h1>
                            <div class="video-container">
                                <iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/W1S7vUCfaEc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            
                            <img id="YAKYUKENLOGO" src="images/4ARINAYAKYUKEN/ARINAYAKYUKENLOGO.png" alt="">
                            <div id="arina-video-context" >
                                <p data-i18n-text="arinaVideoContext"></p>
                            </div>
                            
                        </div>
                        
                        <div id="arina-video-button"  class="col-sm-2 col-md-5">
                            <div class="beforebutton"></div>
                            <a class="w-button button1" href="https://www.arinamillion.com/arinanew/">
                                
                                <p>PLAY NOW!</p>
                            </a>
                        </div>
                    </div>

                </div>
                    
                    
            </section>
            <section class="s-model s-model-arina-video">
                <div class="container">
                <div class="s-arina-video-context" >
                    <p data-i18n-text="arinaVideoContext"></p>
                </div>
                <a class="s-button button1" href="https://www.arinamillion.com/arinanew/">
                <p>PLAY NOW!</p>
                </a>
                </div>                
                
            </section>
    <!--------arina-interface------------------------------------------------>
            <section id="arina-interface">
                <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-md-5 interface-left">
                        <div class="interface-left-logo">
                            <div class="interface-icon">
                                <img src="images/5ARINALANDTYCOON/ARINALANDTYCOONAPPLOGO.png" alt="">
                            </div>
                            <div class="interface-logo">
                                <img src="images/5ARINALANDTYCOON/logo01.png" alt="">
                            </div>
                        </div>

                        <div class="arina-interface-img s-model col-sm-12 col-md-7">
                            <img class="interface-macbook" src="images/5ARINALANDTYCOON/WebMobile.png" alt="">
                            
                        </div>

                        <div class="interface-context">
                            <p data-i18n-text="arinaLANDTYCOON"></p>
                            <h5 data-i18n-text="monoandsimc"></h5>
                            <p data-i18n-text="arinaLANDTYCOON_1"></p>
                            <p data-i18n-text="arinaLANDTYCOON_2"></p>
                            <p data-i18n-text="arinaLANDTYCOON_3"></p>
                            <p data-i18n-text="arinaLANDTYCOON_4"></p>
                            <p data-i18n-text="arinaLANDTYCOON_5"></p>
                        </div>

                        <div class="button-group">
                            <div id="androidDownload">
                                <a href="http://www.arinatycoon.com/arinatycoonapp/ALT_Beta102.apk" >
                                    <p data-i18n-text="androidDownload"></p>
                                </a>
                            </div>
                            
                            <div id="website">
                                <a href="http://www.arinatycoon.com/maingame.php">
                                    <p data-i18n-text="website"></p>
                                </a>
                            </div>
                            <div id="iosDownload">
                                <a>
                                    <p  data-i18n-text="iosDownload"></p>
                                    <p>COMMING SOON!</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="arina-interface-img m-model col-sm-12 col-md-7">
                        <img class="interface-macbook" src="images/5ARINALANDTYCOON/WebMobile.png" alt="">
                        
                    </div>
                </div>
                </div>
                
            </section>

    <!--------arina-million------------------------------------------------>
            <section id="arina-million" class="clearfix">
                <div class="arina-million-div">
                    <img src="images/6ARINASCRATCH/millionBG.png" alt="">
                    <div id="million-free">
                        <a href="https://www.arinamillion.com/arinatycoonnew/scratch/">
                            <img src="images/6ARINASCRATCH/ClickForFREE.gif">
                        </a>
                    </div>
                    <div id="arina-million-context">
                    
                        <span data-i18n-text="millionContext_1"></span>
                        <br>
                        <span data-i18n-text="millionContext_2"></span>
                        <br>
                        <span data-i18n-text="millionContext_3"></span>
                        <br>
                        <br>
                        <span data-i18n-text="millionContext_4"></span>
                        <br>
                        <span data-i18n-text="millionContext_5"></span>
                        <br>
                        <span data-i18n-text="millionContext_6"></span>
                        <br>
                        <span data-i18n-text="millionContext_7"></span>
                        <br>
                        <br>
                        <span data-i18n-text="millionContext_8"></span>
                        <br>
                        <span data-i18n-text="millionContext_9"></span>
                        <br>
                        <span data-i18n-text="millionContext_10"></span>
                        <br>
                        <br>
                    </div>

                    <div id="arina-million-notice">
                        <span data-i18n-text="millionNotice_1"></span>
                        <br>
                        <span data-i18n-text="millionNotice_2"></span>
                    </div>
                </div>
                
            </section>

            <section class="s-model s-model-arina-million">
                <div class="container">
                    <div id="s-model-million-free">
                        <a href="https://www.arinamillion.com/arinatycoonnew/scratch/">
                            <img src="images/6ARINASCRATCH/ClickForFREE.gif">
                        </a>
                    </div>
                    <div id="s-model-arina-million-context">
                        <span data-i18n-text="millionContext_1"></span>
                        <br>
                        <span data-i18n-text="millionContext_2"></span>
                        <br>
                        <span data-i18n-text="millionContext_3"></span>
                        <br>
                        <br>
                        <span data-i18n-text="millionContext_4"></span>
                        <br>
                        <span data-i18n-text="millionContext_5"></span>
                        <br>
                        <span data-i18n-text="millionContext_6"></span>
                        <br>
                        <span data-i18n-text="millionContext_7"></span>
                        <br>
                        <br>
                        <span data-i18n-text="millionContext_8"></span>
                        <br>
                        <span data-i18n-text="millionContext_9"></span>
                        <br>
                        <span data-i18n-text="millionContext_10"></span>
                        <br>
                        <br>
                        
                    </div>

                    <div id="s-model-arina-million-notice">
                        <span data-i18n-text="millionNotice_1"></span>
                        <br>
                        <span data-i18n-text="millionNotice_2"></span>
                    </div>
                </div>                
            </section>
    <!--------tron-racer------------------------------------------------>
            <section id="tron-racer" class="clearfix">
                <div class="tron-racer-div">
                    <div class="tron-racer-bg">
                        <img src="images/9TRONRACER/BG.png" alt="">
                    </div>

                    <div class="row">
                        <div class="col-sm-6 tron-racer-left">
                            <div class="tron-racer-logo">
                                <img src="images/9TRONRACER/TronRacerLOGOCN-01.png" alt="">
                            </div>
                            <div class="tron-racer-word">
                                <img src="images/9TRONRACER/ontronDappChainavailablenow_.png" alt="">
                                <a href="">
                                    <img src="images/9TRONRACER/PLAYNOW.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!--------comming-soon------------------------------------------------>
            <section id="comming-soon">
                <div class="comming-soon-div">
                    <div class="comming-soon-bg">
                        <img src="images/10ARINACASINO/BG.png" alt="">
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8 comming-soon-left">
                            <div class="comming-soon-logo">
                                <img src="images/10ARINACASINO/logo.png" alt="">
                            </div>

                            <div class="comming-soon-bottom">
                                <p>COMMING SOON!</p>
                                <div class="comming-soon-store">
                                    <img src="images/10ARINACASINO/GooglePlay.png" alt="">
                                    <img src="images/10ARINACASINO/APPStore.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comming-soon-text">
                        <p data-i18n-text="commingSoon_1"></p>
                        <p data-i18n-text="commingSoon_2"></p>
                        <p data-i18n-text="commingSoon_3"></p>
                    </div>
                </div>
            </section>

            <section id="arina-future">
                <img id="arina-future-bg" src="images/8DAPPLISTING/BG.png" alt="">
                <div class="s-model-bg"></div>
                <div id="future-game">
                    <div>
                        <img src="images/7commingsoon/ARINAHUNTERS.png" alt=""> 
                        <span class="future-game">ARINA HUNTERS</span> 
                        <span class="comming">COMMING SOON</span>         
                    </div>
                    <div>
                        <img src="images/7commingsoon/ARINASPEED.png" alt="">
                        <span class="future-game">ARINA SPEED</span>
                        <span class="comming">COMMING SOON</span>
                    </div>
                    <div>
                        <img src="images/7commingsoon/ARINACASINO.png" alt="">
                        <span class="future-game">ARINA CASINO</span>
                        <span class="comming">COMMING SOON</span>
                    </div>
                </div>
                
                <div id="dapp-listing" class="container">
                    <h3 data-i18n-text="dappListing"></h3>
                    <div class="small-dapp">
                        <a target="_blank" href="https://www.dapp.com/zh/dapp/arina-land-tycoon">
                            <img src="images/8DAPPLISTING/dapp_logo.png" alt="">
                        </a>
                    </div>
                    <div class="small-dapp">
                        <a target="_blank" href="https://dapp.review/dapp/11734/ARINA-LAND-TYCOON">
                            <img src="images/8DAPPLISTING/dappreview.png" alt="">
                        </a>
                    </div>
                    <div class="big-dapp">
                        <a target="_blank" href="https://dapponline.io/dappDetail/2377">
                            <img src="images/8DAPPLISTING/dapp_online.png" alt="">
                        </a>
                    </div>
                    <div class="big-dapp big-dapp2">
                        <a target="_blank" href="https://dapptotal.com/detail/8395/ARINA-LAND-TYCOON">
                            <img src="images/8DAPPLISTING/dapptotal.png" alt="">
                        </a>
                    </div>
                </div>

                <div id="footer">
                    <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="copyright">
                                <p>Copyright © 2018.ARINA UNIVERSE All rights reserved. <br>
                                    BITAPE LOGISTICS TECHNOLOGY CO.,LTD.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="footer">
                            <img src="images/1MenuMain/ARINAUNIVERSELOGO.png" alt="">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="footer">
                                <ul class="nav">
                                    <li>
                                        <a href="https://www.facebook.com/GlobalIdolCoin/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="https://twitter.com/GIC48226830"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="https://www.instagram.com/taiwan_gic/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="https://www.youtube.com/channel/UCm5YE9imTe4LVGOJrSpoJ2g/featured?view_as=subscriber"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                    

                    
                    
                </div>
            </section>
        </div>
        
    
        <!--------footer------------------------------------------------>


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

<script>
    // $("#dapp-selection ul").on("click", ".init", function() {
    //     $(this).closest("ul").children('li:not(.init)').toggle();
    // });

    // var allOptions = $("#dapp-selection ul").children('li:not(.init)');
    // $("#dapp-selection ul").on("click", "li:not(.init)", function() {
    //     allOptions.removeClass('selected');
    //     $(this).addClass('selected');
    //     $("#dapp-selection ul").children('.init').html($(this).html());
    //     allOptions.toggle();
    // });



    $(function(){
        $(window).scroll(function () {
        ///////////////////////dapp-img飛入
            var scrollVal = $(this).scrollTop();
            //console.log(scrollVal);
            if (scrollVal > 1440) {
                $('.dapp-img-a').addClass('demo_animated');
            } else {
                $('.dapp-img-a').removeClass('demo_animated');
            }

        ///////navbar背景加入
            if (scrollVal > 0 ) {
                $('#navber').addClass('navber');
            } else {
                $('#navber').removeClass('navber');
            }
        });

        // var width = $(this).width();
        // if(width<1050){
        //     $("#arina-video-context").hide();
        //     $(".w-button").hide();
            
        //     $("#million-free").hide();
        //     $("#arina-million-context").hide();
        //     $("#arina-million-notice").hide();

        //     $(".s-model").show();
            
        // }
        
    });

/////////////navbar Dapp 選單
    $(document).ready(function(){
        $("#dapp-selection").click(function(){
            $(".list-unstyled").toggle();
        });
    });



/////////arina-info info-context 升高
    $(".info-context").hover(
        function(){
            $(this).addClass('info-context-hover');
        }, function(){
            $(this).removeClass('info-context-hover');
    });
    
/////////加入漢堡選單背景圖
    // var flip = 0;
    // $( ".navbar-toggler" ).click(function() {
    //     $( "#navber" ).toggle( "css", function() {
            
    //     });
    // });

    $(".navbar-toggler").click(function(){
        $("#navber").toggleClass("navber");
        $(".toggle-navber").toggle();
    });

    // $(".navbar-toggler").click(function(){
    //     $('.navbar-toggler').toggle(function () {
    //         $('#navber').css('height','10%');
    //     }, function () {
    //         $('#navber').css('height','40vh');
    //     });
    // });
    // $(".navbar-toggler").click(function(){
    //     $("#navber").toggleClass("toggle-navber");
    // });



    
</script>