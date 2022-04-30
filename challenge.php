<?php  
include("conection.php");
include("checkPoints.php");
include("checkLogin.php");
include("getPointByChallenge.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenges</title>
    <!--link font-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!--links css-->
    <link rel="stylesheet" href="js/pop-up.js">
    <link rel="stylesheet" href="css/challenge-style.css">
    <link rel="stylesheet" href="css/footer-style.css">
    <link rel="stylesheet" href="css/header-style.css">
    <!--link icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <div class="logo" id="location">
            <a href="locations.php">
                <img src="images/location.png" alt="">
            </a>
            <a href="locations.php" class="store_locator_text">Store locator</a>
        </div>
        <div class="logo" id="box">
            <a href="index.php"><img src="images/logo lucifer.png" alt="lucifer loyalty program logo"></a>
        </div>
        <div class="logo" id="box"></div>
    </header>
    <nav class="navbar">
        <ul class="navbar-mobile">
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <div class="points-mobile">
                <p><?php echo "$messageActivePoints";?></p>
                <img src="images/matchstick-lucifer.png" alt="points">
            </div>   
            <div class="menu" id="mobile">
                <div class="mobile">
                    <li class="left" id="selected"><a href="index.php">Home</a></li>
                    <li class="left"><a href="rewards.php">Rewards</a></li>
                    <li class="left"><a href="challenge.php">Challenges</a></li>
                    <li class="left"><a href="sponsor.php">Sponsors</a></li>
                    <li class="left"><a href="contact.php">Contact us</a></li>
                    <li class="right"><a href="profile.php">Profile</a></li>
                    <!-- desktop version -->
                    <li class="right-mobile">
                        <a href="profile.php"><img src="images/user.png" alt=""></a>
                    </li>
                    <li class="right-mobile" id="points"><a href="profile.php"><?php echo "$messageActivePoints";?><img src="images/matchstick-lucifer.png" alt="" ></a></li>
                </div>
            </div>
        </ul>
    </nav>
    <div class="hero">
        <p class="page_name">CHALLENGES</p>
        <img src="./images/coffee-beans.jpg" alt="coffee-beans">
    </div>
    <!--challenge of day start-->
    <p class="smaller_name">CHALLENGES OF THE DAY</p>
    <div class="rewards">
        <div class="one-reward">
            <div class="box"><img class="photo_ch_1" src="./images/first-challenge-.png"></div>
            <div class="small-box">
                <div class="box-text-left">
                    <button data-modal-id="myModal-first-mod" class="button first-mod">Buy a sandwich</button>
                </div>
                <div class=" box-text-right ">
                    <div class="points ">
                        <h4>40<img src="./images/point-photo.png "></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="one-reward ">
            <div class="box "><img class="photo_ch_1 " src="./images/second-challenge.png "></div>
            <div class="small-box ">
                <div class="box-text-left ">
                    <button data-modal-id="myModal-second-mod" class="button second-mod">Order a coffee</button>
                </div>
                <div class="box-text-right ">
                    <div class="points ">
                        <h4>20<img src="./images/point-photo.png "></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="one-reward ">
            <div class="box "><img class="photo_ch_1 " src="./images/thurd-challenge.png "></div>
            <div class="small-box ">
                <div class="box-text-left ">
                    <button data-modal-id="myModal-thurd-mod" class="button thurd-mod">Buy a cake</button>
                </div>
                <div class="box-text-right ">
                    <div class="points ">
                        <h4>50<img src="./images/point-photo.png "></h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--challenge of day end-->
    <br>
    <br>
    <br>
    <br>
    <!--location challenge start-->
    <div class="middle part ">
        <div class="green_square ">
            <img class="r" src="./images/rectangle_2.png ">
            <div class="text-ch ">
                <h1 class="visitl ">VISIT LOCATION KENNEDYPLEIN</h1>
                <br>
                <h2>AS A LOYAL CLIENT OF LUCIFER, To claim this reward, you need to visit LUCIFER at kennedyplein. mAKE A PURCHASE AND ENJOY YOUR NEW POINTS AND COFFEE.</h2>
                <div class="small-box ">
                    <div class="box-text-left ">
                        <button data-modal-id="myModal-visit-location" class="button location visit-location">VISIT LOCATION KENNEDYPLEIN</button>
                    </div>
                    <div class="box-text-right ">
                        <div class="points ">
                            <h4>100<img class="p " style="width: 8%; " src="./images/point-photo.png "></h4>
                        </div>
                    </div>
                </div>
                <!-- Modal visit location -->
                <div id="myModal-visit-location" class="modal">
                    <div class="modal-content location">
                        <div class="contact-container  ">
                            <div class="left-col lo">
                                <img class="lc" src="./images/locat.png">
                            </div>
                            <div class="right-col location">
                                <span class="close">&times;</span>
                                <h1>Visit location KENNEDYPLEIN</h1>
                                <br>
                                <p>mAKE A PURCHASE AND Scan your NFC tag to collect 100 matchsticks:</p>
                                <form action="" method="post">
                                <button name = "get_points_location" data-modal-id="myModal-confirmed-mod" class="button close_pop">Scan NFC tag:</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal visit location end  -->
                <!-- confirmed qr-code end -->
                <!-- Modal buy sandwich 1-->
                <div id="myModal-first-mod" class="modal">
                    <div class="modal-content">
                        <div class="contact-container">
                            <div class="left-col">
                                <img class="fc" src="./images/first-challenge-.png">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>Buy a sandwich</h1>
                                <br>
                                <p>At one of Lucifer's locations and Scan your NFC tag to collect 40 matchsticks:</p>
                                <br>
                                <p>#challengeoftheday</p>
                                <div id="the-final-countdown">
                                    <p></p>
                                </div>
                                <form action="" method="post">
                                <button name = "get_points_sandwich" data-modal-id="myModal-confirmed-mod" class="button close_pop">Scan NFC tag:</button>
                            </form><ton>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal content sandwich end 1-->
                <!-- confirmed qr-code start-->
                <div id="myModal-confirmed-mod" class="modal">
                    <div class="modal-content-confirm modal-content">
                        <div class="contact-container">
                            <div class="right-col check">
                                <span class="close">&times;</span>
                                <p>code was confirmed</p>
                                <br>
                                <img class="check" src="./images/check.png">
                                <br>
                                <p>successfully added</p>
                                <div class="points ">
                                    <h4>40<img class="p " style="width: 6%; " src="./images/point-photo.png "></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal content coffee 2  -->
                <div id="myModal-second-mod" class="modal">
                    <div class="modal-content">
                        <div class="contact-container">
                            <div class="left-col left-col1">
                                <img class="sc" src="./images/second-challenge.png">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>Order a coffee:</h1>
                                <br>
                                <p>At one of Lucifer's locations and Scan your NFC tag to collect 20 matchsticks:</p>
                                <br>
                                <p>#challengeoftheday</p>
                                <div id="the-final-countdown">
                                    <p></p>
                                </div>
                                <form action="" method="post">
                                <button name = "get_points_coffe" data-modal-id="myModal-confirmed-mod" class="button close_pop">Scan NFC tag:</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal content coffee 2 end -->
                <!-- Modal cake start 3 -->
                <div id="myModal-thurd-mod" class="modal">
                    <div class="modal-content">
                        <div class="contact-container">
                            <div class="left-col left-col1">
                                <img class="sc" src="./images/thurd-challenge.png">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>Order a cake:</h1>
                                <br>
                                <p>At one of Lucifer's locations and Scan your NFC tag to collect 25 matchsticks:</p>
                                <br>
                                <p>#challengeoftheday</p>
                                <div id="the-final-countdown">
                                    <p></p>
                                </div>
                                <form action="" method="post">
                                <button name = "get_points_cake" data-modal-id="myModal-confirmed-mod" class="button close_pop">Scan NFC tag:</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal cake end 3 -->
                <!-- Modal content forth  -->
                <div id="myModal-forth-mod" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">

                        <div class="contact-container">
                            <div class="left-col juice">
                                <img class="fc" src="./images/thurd-ch.png">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>Buy juice</h1>
                                <p>orange | apple | strawberry</p>
                                <br>
                                <p>Buy a juice by your choice and scan your NFC tag to collect 15 matchsticks:</p>
                                <form action="" method="post">
                                <button name = "get_points_juice" data-modal-id="myModal-confirmed-mod" class="button close_pop">Scan NFC tag:</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal content forth end -->
                <!-- Modal content fifth  -->
                <div id="myModal-fifth-mod" class="modal">
                    <div class="modal-content">

                        <div class="contact-container">
                            <div class="left-col coockie">
                                <img class="fifthc" src="./images/fourth-ch.png">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>Buy a cookie</h1>
                                <p>triple choco | white choco</p>
                                <br>
                                <p>At one of Lucifer's locations and Scan your NFC tag to collect 5 matchsticks:</p>
                                <form action="" method="post">
                                <button name = "get_points_cookie" data-modal-id="myModal-confirmed-mod" class="button close_pop">Scan NFC tag:</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal content six  -->
                <div id="myModal-six-mod" class="modal">
                    <div class="modal-content">

                        <div class="contact-container">
                            <div class="left-col beer">
                                <img class="sixc" src="./images/5-ch.png">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>Buy a beer</h1>
                                <p>| DE KROMME HARING | </p>
                                <br>
                                <p>At one of Lucifer's locations and Scan your NFC tag to collect 5 matchsticks:</p>
                                <form action="" method="post">
                                <button name = "get_points_beer" data-modal-id="myModal-confirmed-mod" class="button close_pop">Scan NFC tag:</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal content six end -->
                <!-- Modal content seven  -->
                <div id="myModal-seven-mod" class="modal">
                    <div class="modal-content confirm">
                        <div class="contact-container">
                            <div class="right-col spend">
                                <span class="close">&times;</span>
                                <h1 class="tit">Lucifer game</h1>
                                <p>Spend 50 matches for a random surprise.</p>
                                <br>
                                <p>Instructions</p>
                                <br>
                                <p>The beans will light up randomly between each other until it lands on one.</p>
                                <p>After stopping, a random price will appear on the screen </p>
                                <p>Good luck !</p>
                                <button   class="button " id="confBtn">Confirm</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal content seven end -->
                <!-- Modal game first price -->
                <div id="myModal-game-mod" class="modal">
                    <div class="container">
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                    </div>
                    <div class="modal-content-price model-content ">
                        <div class="contact-container">
                            <div class="left-col">
                                <img class="month-b" src="./images/month-b.jpg">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>You won:</h1>
                                <p>Free Monthly Subscription | 250 grams</p>
                                <br>
                                <p>Choose a coffee blend of your choice</p>
                                <p>Usable once</p>
                                <br>
                                <p>Visit profile page to use reward</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal first price game end -->
                <!-- Modal game second price -->
                <div id="myModal-secondp-mod" class="modal">
                    <div class="container">
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                    </div>
                    <div class="modal-content-price">
                        <div class="contact-container">
                            <div class="left-col">
                                <img class="sandw" src="./images/sandwich-reward.jpg">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>You won:</h1>
                                <p>Free sandwich</p>
                                <br>
                                <p>Order a fresh sandwich of your choice</p>
                                <p>Usable once</p>
                                <br>
                                <p>Visit profile page to use reward</p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal second price game end -->
                <!-- Modal game thurd price -->
                <div id="myModal-thurdp-mod" class="modal">
                    <div class="container">
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                        <div class="confetti"></div>
                    </div>
                    <div class="modal-content-price">
                        <div class="contact-container">
                            <div class="left-col">
                                <img class="late" src="./images/latte-art-mobile.png">
                            </div>
                            <div class="right-col">
                                <span class="close">&times;</span>
                                <h1>You won:</h1>
                                <p>Free coffee</p>
                                <br>
                                <p>Order a coffee of your choice</p>
                                <p>Usable once</p>
                                <br>
                                <p>Visit profile page to use reward</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal thurd price game end -->
            </div>
        </div>
        <br>
        <br>
    </div>
    <!--location challenge end-->
    <!--continuing with the challenges  -->
    <div class="rewards ">
        <div class="one-reward ">
            <div class="box "><img class="photo_ch_1 " src="./images/thurd-ch.png "></div>
            <div class="small-box ">
                <div class="box-text-left ">
                    <button data-modal-id="myModal-forth-mod" class="button forth-mod">Buy a juice</button>
                </div>
                <div class="box-text-right ">
                    <div class="points ">
                        <h4>12<img src="./images/point-photo.png "></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="one-reward ">
            <div class="box "><img class="photo_ch_1 " src="./images/fourth-ch.png"></div>
            <div class="small-box ">
                <div class="box-text-left ">
                    <button data-modal-id="myModal-fifth-mod" class="button fifth-mod">Buy a cookie</button>
                </div>
                <div class="box-text-right ">
                    <div class="points ">
                        <h4>7<img src="./images/point-photo.png "></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="one-reward ">
            <div class="box "><img class="photo_ch_1 " src="./images/5-ch.png "></div>
            <div class="small-box ">
                <div class="box-text-left ">
                    <button data-modal-id="myModal-six-mod" class="button six-mod">Buy a beer</button>
                </div>
                <div class="box-text-right ">
                    <div class="points ">
                        <h4>5<img src="./images/point-photo.png "></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--challenges end -->
    <!--game start-->
    <div class="title">
        <p>Game</br>Lucifer challenges you to spend 50<br> matchsticks on a surprise reward.</p>
    </div>
    <img class="cup " src="./images/cup.png ">
    <img class="lucycup " src="./images/lucifer_4.png ">
    <img class="oneb " src="./images/oneb.png ">
    <img class="secb " src="./images/secb.png ">
    <img class="thurdb " src="./images/thurdb.png ">
    <br>
    <!--green boxes start-->
    <div class="kutii ">
        <img class="kytiikata1 " src="images/kytiikata.png ">
        <img class="kytiikata2 " src="images/kytiikata.png ">
        <img class="kytiikata3 " src="images/kytiikata.png ">
        <img class="kytiikata4 " src="images/kytiikata.png ">
        <img class="kytiikata5 " src="images/kytiikata.png ">
        <img class="kytiikata6 " src="images/kytiikata.png ">
        <img class="kytiikata7 " src="images/kytiikata.png ">
        <img class="kytiikata8 " src="images/kytiikata.png ">
        <img class="kytiikata9 " src="images/kytiikata.png ">
    </div>
    <!--green boxes end-->
    <!--beans placement start-->
    <div class="kytii_bean " id="game-container">
    </div>
    <!--beans placement end-->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="title ">
        <p>USE 50 MATCHstICKS FOR A surprise:</p>
    </div>
    <div class="small-box ">
        <div class="box-text-left ">
        </div>
        <div class="box-text-right ">
            <div class="points ">
                <button data-modal-id="myModal-seven-mod" class="button seven-mod" id="btn">USE</button>
                <h4>50<img src="./images/point-photo.png "></h4>
            </div>
        </div>
    </div>
    <div class="fix-space ">
        <br>
        <br>
        <br>
    </div>
    <script src="/js/countdown-24h.js"></script>
    <script src="./index.js "></script>
    <script src="./pop-up.js "></script>
    <!--game end-->
    <footer>
        <div class="both">
            <div class="left-part-footer">
                <div class="logo-footer">
                    <img src="images/logo lucifer.png" alt="logo">
                </div>
                <div class="contact-info">
                    <div class="contact-phone">
                        <i class="material-icons">phone</i><a href="tel:+39 834 37849">+39 834 37849</a>
                    </div>
                    <div class="contact-email">
                        <i class="material-icons">email</i><a href="mailto:loyaltiesoflucifer@gmail.com">loyaltiesoflucifer@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="middle_part">
                <img class="footer_line" src="/images/line_17.png">
            </div>
            <div class="right-part-footer">
                <div class="page-links">
                    <div class="all-links">
                        <a href="index.php">Homepage
                            <span class="border border-top"></span>
                            <span class="border border-right"></span>
                            <span class="border border-bottom"></span>
                            <span class="border border-left"></span>
                        </a>
                        <p><a href="contact.php">Contact us</a>
                            <a href="locations.php">Locations</a>
                            <a href="rewards.php">Rewards</a>
                            <a href="challenge.php">Challenges</a>
                            <a href="sponsor.php">Sponsor</a></p>
                    </div>
                    <!-- mobile version -->
                    <div class="three-links">
                        <p><a href="index.php">Homepage</a></p>
                        <p><a href="contact.php">Contact us</a></p>
                        <p><a href="locations.php">Locations</a></p>
                    </div>
                    <div class="three-links">
                        <p><a href="rewards.php">Rewards</a></p>
                        <p><a href="challenge.php">Challenges</a></p>
                        <p><a href="sponsor.php">Sponsor</a></p>
                    </div>
                    <div class="social-media">
                        <a href="https://www.facebook.com/lucifercoffeeroasters" target="_blank"><img class="facebook" src="images/facebook.png" alt="facebook"></a>
                        <a href="https://www.instagram.com/lucifer.coffee.roasters/" target="_blank"><img class="instagram" src="images/instagram.png" alt="instagram"></a>
                        <a href="https://nl.linkedin.com/company/lucifer-coffee-roasters" target="_blank"><img class="linkedin" src="images/in.png" alt="linkedin"></a>
                    </div>
                </div>
                <div class="copyright">
                    <p>©UDIAC 2021</p>
                </div>
            </div>
        </div>
    </footer>
</body>
<!--links js-->
<script src="./js/pop-up-challenge.js"></script>
<script src="./js/game.js"></script>

<script>
</script>

</html>