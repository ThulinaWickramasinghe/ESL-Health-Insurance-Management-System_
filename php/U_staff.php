<?php
include 'database.php';

$staff_ID=$_POST['SID'];
$staff_name=$_POST['Sname'];


$sql = "UPDATE staff SET Sname ='$staff_name' WHERE SID='$staff_ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>