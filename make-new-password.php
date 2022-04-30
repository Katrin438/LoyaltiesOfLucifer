<?php
include("conection.php");
    if(isset($_POST['change-password'])){
      $_SESSION['info'] = "";
      $password = mysqli_real_escape_string($db_connection, $_POST['password']);
      $cpassword = mysqli_real_escape_string($db_connection, $_POST['cpassword']);
      if($password !== $cpassword){
          $massage= "password not matched!"; //if password does not matched do this
      }else{
          $code = 0;
          $email = $_SESSION['email']; //getting this email using session
          $encpass = password_hash($password, PASSWORD_BCRYPT);
          $update_pass = "UPDATE customer SET code = $code, password = '$encpass' WHERE email = '$email'";
          $run_query = mysqli_query($db_connection, $update_pass);
          if($run_query){
              $_SESSION['info'] = $info;
              header('Location: new-password-succes.php');
          }else{
              $massage_faild = "Failed to change your password!";
          }
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
            claimed rewards <br>to our barista</p><img class ="icons-step"src="images/icon-cup.png" alt="">
        </div>
      </div>
      <div class="box2">
        <!--logo-->
      <div class="logo-lucifer-box">
      <img class="logo-lucifer" src="images/logo lucifer.png" alt="" onclick="location.href='index.php'">
      </div>
               <?php echo "<p style= 'color:red'  >$massage</p>" ;?><br>
               <?php echo "<p style= 'color:red'  >$massage_faild</p>" ;?><br>

      <!--creat new password instructions-->
        <p class="">Please create a new password </p>
        <p class="">that you don't use on any other site</p><br>

        <form  class="form-inputs" action="" method="post">
          <!-- new password-->
          <label class="label-password-3" for="lname">new password</label>
          <input class="input-password-3" required type="password" id="lname" placeholder="new password.." name="password">
          <!-- confirm new password-->
          <label class="label-password-4" for="lname"> confirm password</label>
          <input class="input-password-4" required type="password" id="lname" placeholder=" write new password agian.." name="cpassword">
          <!-- btn change-->
          <input class="button-change" type="submit" value="change" name="change-password" onclick="location.href='new-password-succes.php'">
        </form>
      </div>
    </div>
  </div>
</body>

</html>