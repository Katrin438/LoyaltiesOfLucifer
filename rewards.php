<?php  
include("conection.php");
include("checkPoints.php");
include("checkLogin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rewards</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/header-style.css" />
    <link rel="stylesheet" href="css/rewards-style.css" />
    <link rel="stylesheet" href="css/footer-style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <!-- Icons footer-->
</head>

<body>
    <header class="header">
        <div class="logo" id="location">
            <a href="locations.php"><img src="images/location.png" alt=""></a>
            <a href="locations.php" class="store_locator_text">Store locator</a>
        </div>
        <div class="logo" id="box">
            <a href="index.php"><img src="images/logo lucifer.png" alt="lucifer loyalty program logo"></a>
        </div>
        <div class="logo" id="box"></div>
    </header>
    <nav class="navbar">
    <ul class="navbar-mobile">
        <input type="checkbox" id="checkbox_toggle"/>
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
                    <li class="right-mobile" id="points"><a href="profile.php"><?php echo $messageActivePoints;?><img src="images/matchstick-lucifer.png" alt="" ></a></li>
                </div>
            </div>
        </ul>
    </nav>
    <div class="hero">
        <p class="hero-text">Rewards</p>
        <img src="images/rewards-hero.jpeg" alt="hero-image" />
    </div>
    <!-- beginning rewards page -->
    <div class="rewards">
        <!-- 1 -->
        <div class="one-reward">
            <div class="box">
                <img src="images/sandwich.png" alt="free-sandwich" />
            </div>
            <div class="small-box">
                <div class="box-text-left">
                    <div class="box-title">
                        <p>Free sandwich</p>
                    </div>
                    <a href="reward1.php">
                        <button class="open-btn">Use points</button>
                    </a>
                </div>
                <div class="box-text-right">
                    <div class="points">
                        <p>
                            40
                            <img src="images/matchstick.png" alt="" />
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="one-reward">
            <div class="box">
                <img src="images/coffee-beans-bag.png" alt="discount-coffee-beans" />
            </div>
            <div class="small-box">
                <div class="box-text-left">
                    <div class="box-title">
                        <p> 10% off<br/> coffee beans</p>
                    </div>
                    <a href="reward2.php">
                        <button class="open-btn">Use points</button>
                    </a>
                </div>
                <div class="box-text-right">
                    <div id="points">
                        <p>20<img src="images/matchstick.png" alt="" /></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3 -->
        <div class="one-reward">
            <div class="box">
                <img src="images/coffee-cup.png" alt="free-coffee" />
            </div>
            <div class="small-box">
                <div class="box-text-left">
                    <div class="box-title">
                        <p>free coffee</p>
                    </div>
                    <a href="reward3.php">
                        <button class="open-btn">Use points</button>
                    </a>
                </div>
                <div class="box-text-right">
                    <div class="points">
                        <p>
                            20
                            <img src="images/matchstick.png" alt="" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 4 -->
    <div class="rewards">
        <div class="one-reward">
            <div class="box">
                <img src="images/mug.png" alt="mug-lucifer" />
            </div>
            <div class="small-box">
                <div class="box-text-left">
                    <div class="box-title">
                        <p>lucifer coffee mug</p>
                    </div>
                    <a href="reward4.php">
                        <button class="open-btn">Use points</button>
                    </a>
                </div>
                <div class="box-text-right">
                    <div class="points">
                        <p>
                            30
                            <img src="images/matchstick.png" alt="" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 5 -->
        <div class="one-reward">
            <div class="box">
                <img src="images/beer.png" alt="beer" />
            </div>
            <div class="small-box">
                <div class="box-text-left">
                    <div class="box-title">
                        <p>free beer</p>
                    </div>
                    <a href="reward5.php">
                        <button class="open-btn">Use points</button>
                    </a>
                </div>
                <div class="box-text-right">
                    <div class="points">
                        <p>
                            20
                            <img src="images/matchstick.png" alt="" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- 6 -->
        <div class="one-reward">
            <div class="box">
                <img src="images/one-month-free.png" alt="one-month-free" />
            </div>
            <div class="small-box">
                <div class="box-text-left">
                    <div class="box-title">
                        <p>
                            one month free
                            <br /> subscription
                        </p>
                    </div>
                    <a href="reward6.php">
                        <button class="open-btn">Use points</button>
                    </a>
                </div>
                <div class="box-text-right">
                    <div class="points">
                        <p>
                            100
                            <img src="images/matchstick.png" alt="" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 7 -->
    <div class="rewards">
        <div class="one-reward">
            <div class="big-box">
                <img id="desktop-img" src="images/latte-art.png" alt="latte-art" />
                <img id="mobile-img" src="images/latte-art-mobile.png" alt="latte-art" />
            </div>
            <div class="big-small-box">
                <div class="box-text-left">
                    <div class="box-title">
                        <p>Latte Art workshop</p>
                    </div>
                    <a href="reward7.php">
                        <button class="open-btn">Use points</button>
                    </a>
                </div>
                <div class="box-text-right">
                    <div class="points">
                        <p>
                            200
                            <img src="images/matchstick.png" alt="" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- beginning of footer -->
    <footer>
        <div class="both">
            <div class="left-part-footer">
                <div class="logo-footer">
                    <img src="images/logo lucifer.png" alt="logo" />
                </div>
                <div class="contact-info">
                    <div class="contact-phone">
                        <i class="material-icons">phone</i>
                        <a href="tel:+39
                                834 37849">
                                +39 834 37849
                            </a>
                    </div>
                    <div class="contact-email">
                        <i class="material-icons">email</i>
                        <a href="mailto:loyaltiesoflucifer@gmail.com">
                                loyaltiesoflucifer@gmail.com
                            </a>
                    </div>
                </div>
            </div>
            <div class="middle_part">
                <img class="footer_line" src="/images/line_17.png" />
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

</html>