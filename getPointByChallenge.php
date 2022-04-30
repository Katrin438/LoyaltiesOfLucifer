<?php  
include("conection.php");
include("checkPoints.php");
include("checkLogin.php");
?>
<?php //
if(isset($_POST['get_points_coffe'])){
            $points = 20;
            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints + $points;
            $update_points = "UPDATE points SET activePoints = '$newPoints' WHERE customerID = '$customerID'";
            $run_query = mysqli_query($db_connection, $update_points);

            header("Location: challenge.php");
}
?>
<?php
if(isset($_POST['get_points_sandwich'])){
            $points = 40;
            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints + $points;
            $update_points = "UPDATE points SET activePoints = '$newPoints' WHERE customerID = '$customerID'";
            $run_query = mysqli_query($db_connection, $update_points);
            header("Location: challenge.php");

}
?>
<?php
if(isset($_POST['get_points_location'])){
            $points = 100;
            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints + $points;
            $update_points = "UPDATE points SET activePoints = '$newPoints' WHERE customerID = '$customerID'";
            $run_query = mysqli_query($db_connection, $update_points);
            header("Location: challenge.php");
}
?>
<?php
if(isset($_POST['get_points_cake'])){
            $points = 25;
            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints + $points;
            $update_points = "UPDATE points SET activePoints = '$newPoints' WHERE customerID = '$customerID'";
            $run_query = mysqli_query($db_connection, $update_points);
            header("Location: challenge.php");
}
?>
<?php
if(isset($_POST['get_points_juice'])){
            $points = 12;
            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints + $points;
            $update_points = "UPDATE points SET activePoints = '$newPoints' WHERE customerID = '$customerID'";
            $run_query = mysqli_query($db_connection, $update_points);
            header("Location: challenge.php");
}
?>
<?php
if(isset($_POST['get_points_cookie'])){
            $points = 7;
            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints + $points;
            $update_points = "UPDATE points SET activePoints = '$newPoints' WHERE customerID = '$customerID'";
            $run_query = mysqli_query($db_connection, $update_points);
            header("Location: challenge.php");
}
?>
<?php
if(isset($_POST['get_points_beer'])){
            $points = 5;
            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints + $points;
            $update_points = "UPDATE points SET activePoints = '$newPoints' WHERE customerID = '$customerID'";
            $run_query = mysqli_query($db_connection, $update_points);
            header("Location: challenge.php");
}
?>
<?php
//spending points for entering game
if(isset($_POST['btn_use_points'])){
            $points = 50;
    if($activePoints >= $points){

            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints - $points;
            $newUsedPoints =  $usedPoints + $points;
            $update_points = "UPDATE points SET activePoints = '$newPoints', usedPoints = '$newUsedPoints' WHERE customerID = '$customerID'";
            $run_query = mysqli_query($db_connection, $update_points);
            $_SESSION["btn_use_points"]=true;
}else{
    echo "u dont have enogh points";
}
}
?>