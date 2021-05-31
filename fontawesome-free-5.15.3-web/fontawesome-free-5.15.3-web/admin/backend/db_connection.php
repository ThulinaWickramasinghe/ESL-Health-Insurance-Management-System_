<?php
 //Refered from w3
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>