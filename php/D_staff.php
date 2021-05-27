<?php
include 'database.php';

$staff_ID=$_POST['SID'];



$sql="DELETE from staff WHERE SID='$staff_ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>