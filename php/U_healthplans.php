<?php
include 'database.php';

$plan_ID=$_POST['PID'];
$plan_name=$_POST['Pname'];
$plan_description=$_POST['Pdescription'];
$plan_price=$_POST['Pprice'];

$sql = "UPDATE Health_Plan SET Pname ='$plan_name', Pdescription='$plan_description', Pprice='$plan_price'  WHERE PID='$plan_ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>