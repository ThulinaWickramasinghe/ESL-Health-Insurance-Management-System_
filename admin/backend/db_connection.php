<?php
 //Refered from w3
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "health_insurance";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {

  echo "fail";
  //die("Connection failed: " . mysqli_connect_error());
}
?>