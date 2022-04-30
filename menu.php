<?php
include("conection.php");
include("checkPoints.php");

if(isset($_POST["submit_menu"])){
  $customerID=mysqli_real_escape_string($db_connection,$_POST["customerID"]);
  $check_customer = "SELECT * FROM customer WHERE customerID = '$customerID'";
  $res = mysqli_query($db_connection, $check_customer);
  $locationName = mysqli_real_escape_string($db_connection,$_POST["LocationName"]);
  $productName = mysqli_real_escape_string($db_connection,$_POST["productName"]);
  $productType = mysqli_real_escape_string($db_connection,$_POST["productType"]);
  $points = mysqli_real_escape_string($db_connection,$_POST["points"]);
  $productPrice = mysqli_real_escape_string($db_connection,$_POST["productPrice"]);
  if(mysqli_num_rows($res) > 0) {
    $sqlOrder= "insert into `order` (locationName,customerID ) values ('$locationName','$customerID');";
    $sqlProduct="insert into `product` (productName,productType,price) values ('$productName','$productType','$productPrice');";
    $sql = "SELECT  *
    FROM points 
    where customerID = '$customerID'"; // get the points that user already have 
    
  $result=mysqli_query($db_connection, $sql);

 $row = mysqli_fetch_assoc($result);
 $activePoints = $row["activePoints"];
    $newPoints = $activePoints + $points; // 
    $update_points = "UPDATE points SET activePoints = $newPoints WHERE customerID = $customerID";
    $results = mysqli_query($db_connection, $update_points);
    mysqli_query($db_connection, $sqlOrder);
    mysqli_query($db_connection, $sqlProduct);


      echo "<script> alert('Points added successfully!');</script>";

  }else{

    echo "<script> alert('The customer needs to create an account');</script>";
  }

}
?>
<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>join now</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/form.css">


</head>

<body class= "menu-page">
  <div class="contact-body-menu">
    <div class="menu">
        <div class="contact-form">
          <br>
          <br>
          <img class="menu-logo m" src="images/logo lucifer.png" alt="" onclick="location.href='login.html'">
          <p>
            <button class="bt" onclick="readTag()">Test NFC Read</button>
          </p>
        </div>
        <form action="" method="post">
          

          <label class="label-form" for="customerID">Customer</label>
          <input required type="text" id="customerID" placeholder="Customer ID" name="customerID">
          
          <label class="label-form" for="lucifer-locations">choose location</label>
          <select  id="lucifer-locations"  name="LocationName">

           <option value="kennedyplein 103">Kennedyplein</option>
          <option value="Kleine Berg 47">Kleine Berg</option>
        </select>

        <label class="label-form" for="product-name"  >Product name</label>
          <select  id="product-type" id="product-type" name="productName" >

           <option value="Espresso">Espresso</option>
          <option value="Latte">Latte</option>
          <option value="Donuts">Donuts</option>
          <option value="Croissant">Croissant</option>
        </select>


          <label class="label-form" for="product type">product type</label>
          <select  id="product-type"  name="productType">

           <option value="Beverages">Beverages</option>
          <option value="food">food</option>
          <option value="Products">Products</option>
        </select>

        <label class="label-form" for="points">points</label>
        <input required type="text" id="points" placeholder="enter amount of points" name="points">

        <label class="label-form" for="pruduct-price">product price</label>
        <input required type="text" id="product-price" placeholder="price of pruduct" name="productPrice">
          <br>
          <input class="button-join-2" type="submit" value="submit" name = "submit_menu">
        </form>
          <pre id="log"></pre>
          
    </div>
  </div>







</body>
<script>  
async function readTag() {
  alert("reading")
  if ("NDEFReader" in window) { // reading data through NFC tag 
    const ndef = new NDEFReader();
    try {
      await ndef.scan();
      ndef.onreading = event => {
        const decoder = new TextDecoder();
        for (const record of event.message.records) {
          document.querySelector("#customerID").value=decoder.decode(record.data);// import data from NFC to the customerId section 
          consoleLog("Record type:  " + record.recordType);
          consoleLog("MIME type:    " + record.mediaType);
          consoleLog("=== data ===\n" + decoder.decode(record.data));
        }
      }
    } catch(error) {
      consoleLog(error);
    }
  } else {
    consoleLog("Web NFC is not supported.");
  }
}


function consoleLog(data) {
  var logElement = document.getElementById('log');
  logElement.innerHTML += data + '\n';
}
</script>
</html>