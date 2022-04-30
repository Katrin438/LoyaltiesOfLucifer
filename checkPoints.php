<?php
// getting points from points table and showing it in the website
session_start();
include ("conection.php");
 $customerID=$_SESSION['customerID'];
    $sql = "SELECT  *
    FROM points 
    where customerID = '$customerID'";
    
  $result=mysqli_query($db_connection, $sql);

 $row = mysqli_fetch_assoc($result);
 $messageActivePoints = $row["activePoints"];
 $activePoints = $row["activePoints"];
 $usedPoints = $row["usedPoints"];
 //echo gettype ($activePoints)."<br>";
 //echo "Difference: ",$z; 
 //echo "$messageActivePoints";
?>