<?php  
include("conection.php");
include("checkPoints.php");
include("checkLogin.php");
?>
<?php
//after pressing the button point will be added 
if(isset($_POST['confirm_sandwitch'])){
            $points = 20;
            $customerID=$_SESSION['customerID'];
            $newPoints = $activePoints + $points;
            $updatePoints = "UPDATE points SET activePoints = '$newPoints' WHERE customerID = '$customerID'";
            $runQuery = mysqli_query($db_connection, $updatePoints);

            header("Location: challenge.php");
}
?>