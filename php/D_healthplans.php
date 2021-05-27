<?php
include 'database.php';

$plan_ID=$_POST['PID'];


$sql="DELETE from Health_Plan WHERE PID='$plan_ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>