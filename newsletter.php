<?php 
//i desabled this couse css was broken
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "phpmailer/Exception.php";
require "phpmailer/PHPMailer.php";
require "phpmailer/SMTP.php";
include("conection.php");
include("checkPoints.php");
include("checkLogin.php");
include("newsletterCheck.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link rel="stylesheet" href="css/newsletter.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<?php if($subscription != TRUE) :?>
<body>

  <input type="checkbox" id="toggle">
  <div class="wrapper">
    <label for="toggle">
    <i class="cancel-icon fas fa-times"></i>
    </label>
    <div class="icon"><i class="far fa-envelope"></i></div>
    <div class="content">
      <div class="alert success-alert">
      <?php echo $mailSent ;?>
      </div>
      <div class="alert error-alert">
       <?php echo $mailNotSent; ?>
       </div>
       <div class="alert error-alert">
      <?php echo $notValid  ;?>
       </div>
      <header>Become a Subscriber</header>
      <p>Sign up to our newsletter and get the latest updates straight to your inbox.</p>
    </div>
    <form action="index.php" method="POST">
      <div class="field">
        <input type="text" class="email" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
      </div>
      <div class="field btn">
        <div class="layer"></div>
        <button type="submit" name="subscribe">Subscribe</button>
      </div>
    </form>
    <div class="text">We do not share your information.</div>
  </div>
  



</body>
        <?php endif ;?>
</html>
