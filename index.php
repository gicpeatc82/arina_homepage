<?php 
session_start();
$guest_ip = $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Arina Blockchain Game Universe</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
        <link rel="Bookmark" href="https://www.arinamillion.com/images/favicon_arina.ico" type="image/x-icon" />
    </head>

    <body>
    <!------header-------------------->
        <header id="header">
            <div id="navber">
                <div id="logo">
                    <a href="">
                        <img src="images/logo.jpg" alt="logo">
                    </a>
                </div>
                <div >
                    <ul class="nav">
                        <li>
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="nav">
                        <li><a href="#home" data-i18n-text="arinaUniverse"></a></li>
                        <li><a href="#about" data-i18n-text="dapp"></a></li>
                        <li><a href="#service" data-i18n-text="contract"></a></li>
                    </ul>
                </div>
                
                <div id="language" class="nav">

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="header-left" class="col-sm-12 col-md-8">
                        <h5 data-i18n-text="firstGame"></h5>
                    </div>
                    <div id="header-right" class="col-sm-12 col-md-4">
                    </div>
                </div>
            </div>
        </header>

        <div id="middle-part">
    <!-------arina-info------------------------------>
            <section id=arina-info>
                <div class="container">
                    <div class="row" id="arina-info-top">
                        <div id="info-img" class="col-sm-12 col-md-5">
                            <div class="info-img-item">
                                <img src="images/2WhatisARINAUNIVERSE/ARINALOGO.png" alt="">
                            </div>
                            <div class="info-img-item">
                                <img src="images/2WhatisARINAUNIVERSE/GIClogo.png" alt="">
                            </div>
                            
                        </div>
                        <div id="info-top-context" class="col-sm-12 col-md-7">
                            <h3 data-i18n-text="arinaUniverse"></h3>
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
                        <div class="col-sm-12 col-md-8">
                            <div class="dapp-img" id="dapp-img-left">
                                <img src="images/3OurDAPP/ARINAYAKYUKEN.png" alt="">
                                <img src="images/3OurDAPP/ARINASCRATCH.png" alt="">
                            </div>
                            <div class="dapp-img" id="dapp-img-right">
                                <div></div>
                                <img src="images/3OurDAPP/ARINALANDTYCOON.png" alt="">
                            </div>
                        </div>
                        <div id="arina-dapp-context"  class="col-sm-12 col-md-4">
                            <h5 data-i18n-text="arinaDapp"></h5>
                            <p data-i18n-text="arinaDappContext"></p>
                        </div>
                    </div>

                    <div id="second-title">
                        <img src="images/3OurDAPP/ARINALOGO.png" alt="">
                    </div>
                </div>
            </section>
                
    <!--------arina-video------------------------------------------------>
            <section id="arina-video">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 id="arina-video-title">ARINA YAKYUKEN</h1>
                            <div id="">
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/W1S7vUCfaEc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            
                            <img id="YAKYUKENLOGO" src="images/4ARINAYAKYUKEN/ARINAYAKYUKENLOGO.png" alt="">
                            <p id="arina-video-context" data-i18n-text="arinaVideoContext"></p>
                        </div>
                        <div id="arina-video-button"  class="col-sm-12 col-md-5">
                            <img src="images/4ARINAYAKYUKEN/PLAYNOW.png" alt="">
                        </div>
                    </div>

                </div>
                    

            </section>

    <!--------arina-interface------------------------------------------------>
            <section>
                <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="interface-icon">

                        </div>
                        <div class="interface-context">
                            <h5 data-i18n-text="firstGame"></h5>
                            <p data-i18n-text="firstGame"></p>
                        </div>
                        <div class="interface-button">
                            
                        </div>
                    </div>
                    <div id="arina-dapp-context"  class="col-sm-12 col-md-8">
                        <img src="" alt="">
                        <img src="" alt="">
                    </div>
                </div>
                </div>
                
            </section>

    <!--------arina-million------------------------------------------------>
            <section>

            </section>

        </div>
        
    <!--------footer------------------------------------------------>
        <footer>
            <div id="arina-future">
                <div class="container">
                    <div class="row" id="arina-info-down">
                        <div class="info-item col-sm-12 col-md-5">
                            <div class="info-context">
                                <p data-i18n-text="firstGame"></p>
                            </div>
                        </div>
                        <div class="info-item col-sm-12 col-md-5">
                            <div class="info-context">
                                    <p data-i18n-text="firstGame"></p>
                                </div>
                            </div>
                        <div class="info-item col-sm-12 col-md-2">
                            <div class="info-context">
                                <p data-i18n-text="firstGame"></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div>
                <h5></h5>
            </div>
            <div>

            </div>
            <div>
                <div class="container">
                    <div class="row" id="arina-info-down">
                        <div class="info-item col-sm-12 col-md-4">
                            <div class="info-context">
                                <p data-i18n-text="firstGame"></p>
                            </div>
                        </div>
                        <div class="info-item col-sm-12 col-md-4">
                            <div class="info-context">
                                    <p data-i18n-text="firstGame"></p>
                                </div>
                            </div>
                        <div class="info-item col-sm-12 col-md-4">
                            <div class="info-context">
                                <p data-i18n-text="firstGame"></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>

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

</script>