<?php
include 'database.php';

$User_ID = $_POST['UID'];
$user_add=$_POST['userAddress'];
$new_tel=$_POST['newtpno'];
$e_mail=$_POST['emailAddress'];
$n_pw=$_POST['newPwd'];
$new_name=$_POST['newUserName'];

$sql = "UPDATE User_details SET ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>