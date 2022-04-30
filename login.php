<?php
session_start();
include("conection.php");

if(isset($_POST['but_submit'])){
  $email = mysqli_real_escape_string($db_connection, $_POST['email']);
  $password = mysqli_real_escape_string($db_connection, $_POST['password']);
  $check_email = "SELECT * FROM customer WHERE email = '$email'";
  $results = mysqli_query($db_connection, $check_email);
  if(mysqli_num_rows($results) > 0){
      $fetch = mysqli_fetch_assoc($results);
      $fetch_pass = $fetch['password'];
      if(password_verify($password, $fetch_pass)){  //verifying the  hashed password
            $_SESSION['email'] = $email;   // save it to the session
            $_SESSION['customerID'] = $fetch['customerID'];
           $_SESSION['password'] = $password;
           $_SESSION['lastName'] = $fetch['lastName'];
            $_SESSION['success'] = "You have logged in!";
              header('location: index.php');
         // }else{
           //   $info = "It's look like you haven't still verify your email - $email";
             // $_SESSION['info'] = $info;
              //header('location: user-otp.php');
          }
      else{
        $massageNotMatch =  "Your password or email address do not match.";
       
      }
  }else{
      $massageNotMember =  "It looks like you're not a member yet! Click on the join now button.";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/form.css">

</head>

<body>
  <div class="contact-body">
    <div class="contact-info">
      <div class="box1">
        <div class="tim">
          <p class="text">Collect matchsticks by<br>
            scanning the NFC tag</p>
          <img class ="icons-step"src="../images/icon-bean.png" alt="">

        </div>

        <div class="tom">
          <img class ="icons-step" src="../images/icon-scoop.png" alt=""><br>
          <p class="text">collect matches and spend <br> them on rewards</p>
        </div>

        <div class="ali">
          <p class="text">Go to your profile page and <br>show the
            claimed rewards <br>to our barista</p><img class ="icons-step" src="../images/icon-cup.png" alt="">
        </div>
      </div>
      <div class="box2">
      
      <img class="logo-lucifer" src="../images/logo lucifer.png" alt="" onclick="location.href='index.php'">
      
      <?php echo "<p style= 'color:red'  >$massageNotMatch</p>" ;?><br>
      <?php echo "<p style= 'color:red'  >$massageNotMember</p>" ;?><br>
      <form class="form-inputs"  action="" method="post" id>
        <!--email-->
        <label class="label-email-1" for="email">email</label>

        <input class="input-email-1" required type="email" id="email" placeholder="your email.." name="email">

        <!--password-->
        <label class="label-password-1" for="lname">password</label>
        <input class="input-password-1" required type="password" id="password" placeholder="Your password.." name="password">
        
        <div class="login-btn-box">

        <!--login btn-->
        <input class="button-login" type="submit" value="login" name="but_submit">
        <!--join now btn-->
        <input class="button-join-1" type="submit" value="join now" onclick="location.href='join-now.php'" name="join-now-btn">

        </div>
         
        <!--forgot password link-->
          <a class="forgot-password-link" href="forgot-password.php" >forgot password</a>

      </div>


      </form>
    </div>
  </div>
  </div>
</body>

</html>