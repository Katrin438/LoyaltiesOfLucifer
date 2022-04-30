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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> <!-- Icons footer-->
</head>
<body>
    <header class="header">
        <div class="logo" id="location"><a href="locations.php"><img src="images/location.png" alt=""></a></div>
        <div class="logo" id="box"><a href="index.php"><img src="images/logo lucifer.png" alt="lucifer loyalty program logo"></a></div>
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
                <li class="left"><a href="#">Challenges</a></li>
                <li class="left"><a href="#">Sponsors</a></li>
                <li class="left"><a href="#">Contact us</a></li>
                <li class="right"><a href="profile.php">Profile</a></li>
                <li class="right-mobile"><a href="profile.php"><img src="images/user.png" alt="" ></a></li>
                <li class="right-mobile" id="points"><a href="profile.php">12<img src="images/matchstick-lucifer.png" alt="" ></a></li>
                </div>
            </div>
        </ul>
    </nav>
    <div class="hero">
        <img src="images/coffee-beans.jpg" alt="coffee-beans">
    </div>
    <!-- End of header, menu, hero -->


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
            <div class="right-part-footer">
                <div class="page-links">
                    <div class="all-links">
                        <a href="index.php">Homepage</a> 
                        <p><a href="#">Contact us</a>
                            <a href="locations.php">Locations</a>    
                            <a href="rewards.php">Rewards</a>
                        <a href="#">Challenges</a>
                        <a href="#">Sponsor</a></p>
                    </div>
                    <!-- mobile version -->
                    <div class="three-links">
                        <p><a href="index.php">Homepage</a></p>
                        <p><a href="#">Contact us</a></p>
                        <p><a href="#">Locations</a></p>
                    </div>
                    <div class="three-links">
                        <p><a href="rewards.php">Rewards</a></p>
                        <p><a href="#">Challenges</a></p>
                        <p><a href="#">Sponsor</a></p>
                    </div>
                    <div class="social-media">
                        <img src="images/instagram.png" alt="">
                        <img src="images/instagram.png" alt="">
                        <img src="images/instagram.png" alt="">
                    </div>
                </div>
                <div class="copyright">
                    <p>©UDIAC 2021</p>
                </div>
            </div>
        </div>
    </footer>

</body>

<script src="pop-up.js"></script>
</html>