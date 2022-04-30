<?php
include("conection.php");
include("mailForgetPass.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>reset password</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/form.css">


</head>

<body>
  <div class="contact-body">
    <div class="contact-info">
      <div class="box1">
        <div class="tim">
        <p class="text">Collect matchsticks by<br>
            scanning the NFC tag</p>
          <img class ="icons-step" src="images/icon-bean.png" alt="">

        </div>

        <div class="tom">
          <img class ="icons-step" src="images/icon-scoop.png" alt=""><br>
          <p class="text">collect matches and spend <br> them on rewards</p>
        </div>

        <div class="ali">
        <p class="text">Go to your profile page and <br>show the
            claimed rewards <br>to our barista</p><img class ="icons-step" src="images/icon-cup.png" alt="">
        </div>
        <?php
        if(count($errors) > 0){
            ?>
            <div class="alert alert-danger text-center">
                <?php 
                    foreach($errors as $error){
                        echo $error;
                    }
                ?>
            </div>
            <?php
        }
    ?>
      </div>
      <div class="box2">
        
        <!--logo-->
      <div class="logo-lucifer-box">
      <img class="logo-lucifer" src="images/logo lucifer.png" alt="" onclick="location.href='index.php'">
      </div>
      <br>
      <?php echo "<p style= 'color:red' >$massage_login</p>" ;?><br>
      <!--reset password instructions-->
        <br><p class="">Enter your email</p><br>
        <p class="">We will send you a code to reset your password.</p>
        

        <form  class="form-inputs" action="" method="post">
          <!--email-->
          <br><br>
          <label class="label-email-3" for="email">email</label>
          <input class="input-email-3"  required type="email" id="email" name="email" placeholder="Your email..">


          <div class="forgotpass-btn-box">
          <!--btn cancel-->
          <input class="button-cancel" type="submit" value="cancel" onclick="location.href='login.php'">
          <!--btn send-->
          <input class="button-send" type="submit" value="send" name = "but_forget">
        </div>

        </form>
      </div>
    </div>
  </div>
</body>

</html>