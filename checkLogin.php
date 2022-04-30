<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
$lastName = $_SESSION['lastName'];
//checking  user is loged in
if($email != false && $password != false){
    $sql = "SELECT * FROM customer WHERE email = '$email'";
    $run_Sql = mysqli_query($db_connection, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $code = $fetch_info['code'];
            if($code != 0){
                header('Location: user-otp.php');
            }
        //else{
         //   header('Location: user-otp.php');
       // }
    }
}else{
    header('Location: login.php');
    
}
?>