<?php  
session_start();
include("conection.php");
include("checkLogin.php");
include("checkPoints.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsor page</title>
    <!--link font-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!--links css-->
    <link rel="stylesheet" href="css/header-style.css">
    <link rel="stylesheet" href="./css/footer-style.css">
    <link rel="stylesheet" href="./css/sponsor.css">
    <!--link icon-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
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
    <ul>
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
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
    <p class="page_name">Sponsor</p>
    <img src="./images/sponsor-hero.jpeg" alt="coffee-beans">
</div>

<body>
    <div class="img_text">
        <img class="logo_sponsor" src="./images/logo_sponsor.png">
        <p class="text_in_s">DE KROMME HARING IS ONE OF LUCIFER’S BIG SUPPORTERS AND COLLABORATOR.</p>
    </div>
    <div class="mid_green_box">
        <p>DE KROMME HARING, Making and drinking beer in great places</p>
    </div>
    <div class="two_photos">
        <img class="fbeer" src="./images/beer_sponsor.png">
        <div class="green_box_again">DE KROMME HARING<br><br> Making and drinking beer in great places</div>
        <img class="cbeer" src="./images/raindow_beer.png">

    </div>
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

</html>