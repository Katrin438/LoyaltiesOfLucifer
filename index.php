<?php 
include("conection.php");
include("checkPoints.php");
include("checkLogin.php");
//require_once "newsletter.php"; is desabled becouse we have some css problems when i try to use newsletter ,
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Loyalties of Lucifer</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/header-style.css">
        <link rel="stylesheet" href="css/homepage-style.css">
        <link rel="stylesheet" href="css/footer-style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!-- Icons footer-->
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
                        <li class="right-mobile" id="points"><a href="profile.php"><?php echo $messageActivePoints ;?><img src="images/matchstick-lucifer.png" alt="" ></a></li>
                    </div>
                </div>
            </ul>
        </nav>
        <div class="hero">
            <p class="hero-text-homepage">Loyalties of Lucifer</p>
            <img src="images/hero-homepage.png" alt="coffee-beans">
        </div>

        <!-- End of header, menu, hero -->
        <!-- Beginning of homepage-->
        <div class="title-steps">
            <p>How does the loyalty program work?</p>
        </div>
        <div class="steps">
            <div class="step" id="one">
                <img src="images/coffee-beans .svg" alt="">
                <p>Complete challenges:<br>Collect matchsticks by<br>scanning the <br>NFC tag</p>
            </div>
            <div class="step-mobile">
                <p>Complete challenges:<br>Collect matchsticks by<br>scanning the<br>NFC tag</p>
            </div>
            <div class="arrow">
                <img src="images/arrow.png" alt="">
            </div>
            <div class="step" id="two">
                <img src="images/cup.svg" alt="">
                <p>collect matches and spend <br>them on rewards</p>
            </div>
            <div class="step-mobile">
                <p>collect matches and spend <br>them on rewards</p>
            </div>
            <div class="arrow">
                <img src="images/arrow.png" alt="">
            </div>
            <div class="step" id="three">
                <img src="images/filter.svg" alt="">
                <p>go to your profile page and<br> show the claimed rewards to<br> our barista </p>
            </div>
            <div class="step-mobile">
                <p>go to your profile page and<br> show the claimed rewards to<br> our barista </p>
            </div>
        </div>
        <div class="all-boxes">
            <div class="box1" id="top1">
                <p>loyalties of lucifer is a loyalty program<br>for lucifer coffee roasters. our loyal<br> customers can earn ‘match sticks’ (points)<br> by doing challenges.</p>
            </div>
            <div class="box2" id="top2">
                <img src="images/coffee-latte.png" alt="random">
            </div>
        </div>
        <div class="green-box">
        </div>
        <div class="all-boxes">
            <div class="box2" id="bottom2">
                <img src="images/heart-beans.png" alt="">
            </div>
            <div class="box1" id="bottom1">
                <p>those match sticks can be used on<br> different rewards. check out the<br> <a href="challenge.php">challenges</a> and <a href="rewards.php">rewards</a>.</p>
            </div>
        </div>
        <!-- beginning of footer -->
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
                    <img class="footer_line" src="./images/line_17.png">
                </div>
                <div class="right-part-footer">
                    <div class="page-links">
                        <div class="all-links">
                            <a href="index.php">Homepage
                            <span class="border border-top"></span>
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
                        <p>©UDIAC</a>2021</p>
                    </div>
                </div>
            </div>
        </footer>

    </body>

    </html>
