<?php
session_start();
$name = "";
$_SESSION['success'] = "";
$servername = "studmysql01.fhict.local";
$username = "dbi450256";
$password = "909090";
$database = "dbi450256";

// Create connection 
$db_connection = new mysqli($servername, $username, $password,$database);
?>