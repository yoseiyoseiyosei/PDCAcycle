<?php
$db = "b31_c577";
mysql_connect("localhost","$db","$db") or die(mysql_error());
mysql_select_db('b31_c577');
mysql_query('SET NAMES UTF8');
session_start();

if (!empty($_SESSION['id'])) {
    $userInfo=userDisplay($_SESSION['id']);
}

function userDisplay($userId){
    $sql=sprintf('SELECT * FROM user_profile WHERE user_id="%d"',$userId);
    $temp=mysql_query($sql) or die(mysql_error());
    $userInfo=mysql_fetch_assoc($temp);
    return $userInfo;
}

function htmlSC($value){
    return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
}

 ?>
<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pluton Theme by BraphBerry.com</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="index.php" class="brand">
                        <img src="images/logo2.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="index.php">Home</a></li>
                            <?php if(empty($_SESSION['id'])): ?>
                            <li><a href="signup.php">SignUp</a></li>
                            <li><a href="login.php">Login</a></li>
                            <?php else: ?>
                            <li><a href="plan.php">Plan</a></li>
                            <li><a href="do.php">Do</a></li>
                            <li><a href="check.php">Check</a></li>
                            <li><a href="action.php">Action</a></li>
                            <li><a href="search.php">Search</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">PLAN</h2>
                        <h4>計画する</h4>
                        <p>みんなが試みたい仮説を立てろ!ハードルを極限まで下げた仮説からこれは無理だろーという仮説までなんでもいいから投稿しよう！</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/plan.png" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>DO</h2>
                        <h4>やってみる</h4>
                        <p>面白そうな仮説を検証してみよう！以外とやってみると楽しい事ってたくさんあるよね！</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/do.png" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>CHECK</h2>
                        <h4>評価する</h4>
                        <p>みんなか立てた仮説を検証を評価していこう！どんどんいいねを増やそう！</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/check.png" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- End third slide -->
                    <!-- Start forth slide -->
                    <div class="da-slide">
                        <h2>ACTION</h2>
                        <h4>改善する</h4>
                        <p>仮説→検証→評価をした際に、出てきた改善点などを踏まえてより良いPDCAを回していきましょう！</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="images/action.png" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- End forth slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->

        <!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>P D C A</h1>
                    <!-- Section's title goes here -->
                    <p>〜仮説　検証　評価　改善〜</p>
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    <div class="span3">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <a href="plan.php"><img class="img-circle" src="images/plan.png" alt="service 1"></a>
                            </div>
                            <h3>PLAN</h3>
                            <p>みんなが試みたい仮説を立てろ!ハードルを極限まで下げた仮説からこれは無理だろーという仮説までなんでもいいから投稿しよう！</p>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <a href="do.php"><img class="img-circle" src="images/do.png" alt="service 2" /></a>
                            </div>
                            <h3>DO</h3>
                            <p>面白そうな仮説を検証してみよう！以外とやってみると楽しい事ってたくさんあるよね！</p>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <a href="check.php"><img class="img-circle" src="images/check.png" alt="service 3"></a>
                            </div>
                            <h3>CHECK</h3>
                            <p>みんなか立てた仮説を検証を評価していこう！どんどんいいねを増やそう！</p>
                        </div>
                    </div>
                    <div class="span3">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <a href="action.php"><img class="img-circle" src="images/action.png" alt="service 1"></a>
                            </div>
                            <h3>ACTION</h3>
                            <p>仮説→検証→評価をした際に、出てきた改善点などを踏まえてより良いPDCAを回していきましょう！</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service section end -->
        <div class="section secondary-section " id="portfolio">

                <div class="container">
                    <div class="span9 center contact-info">
                        <p class="info-mail">Murphys</p>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2013 All Rights Reserved</p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>