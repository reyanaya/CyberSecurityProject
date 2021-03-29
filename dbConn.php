<?php
//DB access information
$host = "localhost";
$user = "test"; //use db account
$pass = "Passw0rd!";
$db = "storedb";

//connect database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error){
die("Connection falied: " . $conn->connect_error);
} else{
  // echo "connection established. database connected\n";
}
?>

