<?php 
include("conection.php");
include("checkPoints.php");
include("checkLogin.php");
include("mailContactForm.php");
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
    <link rel="stylesheet" href="css/footer-style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
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
                <p>12</p>
                <img src="images/matchstick-lucifer.png" alt="points">
            </div>   
            <div class="menu" id="mobile">
                <div class="mobile">
                    <li class="left" id="selected"><a href="index.php">Home</a></li>
                    <li class="left"><a href="rewards.php">Rewards</a></li>
                    <li class="left"><a href="challenge.php">Challenges</a></li>
                    <li class="left"><a href="sponsor.php">Sponsors</a></li>
                    <li class="left"><a href="#">Contact us</a></li>
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
        <p class="hero-text">Contact</p>
        <img src="images/contact-profile.jpeg" alt="coffee-beans">
    </div>
    <section class="contact-section">
        <div class="contact-body">
            <div class="contact-info-grid">
                <div>
                    <span><i class = "fas fa-mobile-alt"></i></span>
                    <span>Phone Number</span>
                    <span class="text">+31 6 19411046</span>
                </div>
                <div>
                    <span><i class = "fas fa-envelope-open"></i></span>
                    <span>E-mail</span>
                    <span class="text">hello@lucifercoffeeroasters.com</span>
                </div>
                <div>
                    <span><i class = "fas fa-map-marker-alt"></i></span>
                    <span>Address</span>
                    <span class="text">Kleine Berg 47</span>
                    <span class="text">Bleekweg 1A</span>
                    <span class="text">Eindhoven</span>
                </div>
                <div>
                    <span><i class = "fas fa-clock"></i></span>
                    <span>Opening Hours</span>
                    <span class="text">Monday - Sunday </span>
                    <span>(7:30 AM to 5:00 PM)</span>
                </div>
            </div>
            <form action="" class="contact-form" method="post" enctype=”multipart/form-data” >
                <label for="fname"> First Name </label>
                <input required type="text" id="fname" name="firstname" placeholder=" Your name...">
                <label for="lname"> Last Name </label>
                <input required type="text" id="lname" name="lastname" placeholder=" Your last name..">
                <label for="subject"> Topic </label>
                <input required type="subject" id="subject" name="subject" placeholder=" Topic... ">
                <label for="E-mail"><E-mail> E-mail </E-mail></label>
                <input required type="email" id="email" name="email" placeholder=" Your email...">
                <label for="body"> Message </label>
                <textarea required id="body" name="message" placeholder=" Write something... " style="height:200px"></textarea>
                <input type="submit" value="Submit" name = "btn_contact">
            </form>
    </section>
    <br>
    <br>
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
                <img class="footer_line" src="/images/line_17.png">
            </div>
            <div class="right-part-footer">
                <div class="page-links">
                    <div class="all-links">
                        <a href="index.php">Homepage
                        <span class="border border-top"></span>
                    </a>
                        <p><a href="#">Contact us</a>
                            <a href="locations.php">Locations</a>
                            <a href="rewards.php">Rewards</a>
                            <a href="challenge.php">Challenges</a>
                            <a href="sponsor.php">Sponsor</a></p>
                    </div>
                    <!-- mobile version -->
                    <div class="three-links">
                        <p><a href="index.php">Homepage</a></p>
                        <p><a href="#">Contact us</a></p>
                        <p><a href="locations.php">Locations</a></p>
                    </div>
                    <div class="three-links">
                        <p><a href="rewards.php">Rewards</a></p>
                        <p><a href="challenge.php">Challenges</a></p>
                        <p><a href="sponsor.php">Sponsor</a></p>
                    </div>
                    <div class="social-media">
                        <img class="facebook" src="images/facebook.png" alt="facebook">
                        <img class="instagram" src="images/instagram.png" alt="instagram">
                        <img class="in" src="images/in.png" alt="in">
                    </div>
                </div>
                <div class="copyright">
                    <p>©UDIAC 2021</p>
                </div>
            </div>
        </div>
    </footer>

</body>
 <?php if($_GET["messageSent"]=="done"){
    echo "<script> alert('Email sent succecfully');</script>";
   } ?>
<script src="pop-up.js"></script>

</html>