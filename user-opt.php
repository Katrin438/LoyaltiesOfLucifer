<?php
include("conection.php");
if(isset($_POST['confirm_code'])){
    $_SESSION['info'] = "";
    //
    $otp_code = mysqli_real_escape_string($db_connection, $_POST['code']);
    $check_code = "SELECT * FROM customer WHERE code = '$otp_code'";
    $code_res = mysqli_query($db_connection, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $_SESSION['info'] = $info;
        header('location: make-new-password.php');
        exit();
    }else{
        $massage_failed=  "You've entered an incorrect code!";
    }
}
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
          <img class ="icons-step"src="images/icon-scoop.png" alt=""><br>
          <p class="text">collect matches and spend <br> them on rewards</p>
        </div>

        <div class="ali">
        <p class="text">Go to your profile page and <br>show the
            claimed rewards <br>to our barista</p><img class ="icons-step" src="images/icon-cup.png" alt="">
        </div>

            <div class="alert alert-danger text-center">

            </div>

      </div>
      <div class="box2">
        
      <img class="logo-lucifer" src="images/logo lucifer.png" alt="" onclick="location.href='index.php'">
      <?php echo "<p style= 'color:red'  >$massage_failed</p>" ;?><br>
        
      <p class="center-text">code send successfully</p>
        <br>
<p class="center-textt">If you can not find your code vertification email in your normal inbox, it is worth checking in your spam or junk mail section.</p>
        <p class="text-secretcode">enter the code we sent to your email address.</p>
      
        <form class="form-inputs" action="" method="post">
          <label class="label-secretcode" for="email">Code</label>
          <input class="input-secretcode" required type="number" id="email" name="code" placeholder="Your code....">
          
          <input class="button-send" type="submit" value="send"  name ="confirm_code"><br>
        </form>
      </div>
    </div>
  </div>
</body>

</html>