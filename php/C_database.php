<?php
//Creating Connection Variables
$servername = "localhost";
$username = "root";
$password = "";
$db_name="Health_Insurance";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>