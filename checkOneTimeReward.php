<?php
include("conection.php");
?>


<?php
// to check  the reward is already used or not
$customerID=$_SESSION['customerID'];
$checkSan="select * from rewards where customerID = $customerID AND rewardName = 'Free Sandwich'";
$results=mysqli_query($db_connection, $checkSan);
$fetchSan = mysqli_fetch_assoc($results);
$_SESSION['status'] = $fetchSan['status'];
$statusSan = $_SESSION['status'];
?>
<?php
$customerID=$_SESSION['customerID'];
$checkBeer="select * from rewards where customerID = $customerID AND rewardName = 'Free Beer'";
$resultsBeer=mysqli_query($db_connection, $checkBeer);
$fetchBeer = mysqli_fetch_assoc($resultsBeer);
$_SESSION['status'] = $fetchBeer['status'];
$statusBeer = $_SESSION['status'];
?>
<?php
$customerID=$_SESSION['customerID'];
$checkCoff="select * from rewards where customerID = $customerID AND rewardName = 'Free Coffee'";
$resultsCoff=mysqli_query($db_connection, $checkCoff);
$fetchCoff = mysqli_fetch_assoc($resultsCoff);
$_SESSION['status'] = $fetchCoff['status'];
$statusCoff = $_SESSION['status'];
?>


<?php  // all these code is when the user press the button in the claimed reward section 
if(isset($_POST['confirm_sandwitch'])){
    $customerID=$_SESSION['customerID'];
    $sqlUpdateStatus= "UPDATE rewards set status = '1'  where customerID = $customerID AND rewardName = 'Free Sandwich'";
    $result=mysqli_query($db_connection, $sqlUpdateStatus);
    var_dump($result);
    $_SESSION["confirm_sandwitch"]=true;
    header("Location: profile.php?reward=granded");
}
// if i want to use this code i will not be able to use the countdown.js so to keep the coutdown and also php i need to use Ajax unfortunatelly, i could not ,so instead i decided to keep the countdown
?>