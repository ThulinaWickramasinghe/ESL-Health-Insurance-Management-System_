<?php
include '../php/C_database.php';

$UID=$_POST['UID'];
$username = $_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile_number=$_POST['mobile_number'];
$address=$_POST['address'];


$sql = "UPDATE user SET username ='$username', email ='$email', password ='$password', mobile_number ='$mobile_number', address ='$address' WHERE UID ='$UID' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>