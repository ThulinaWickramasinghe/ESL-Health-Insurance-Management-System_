<?php
include 'database.php';

$User_ID = $_POST['UID'];



$sql="DELETE from Basic_D WHERE UID='$User_ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>