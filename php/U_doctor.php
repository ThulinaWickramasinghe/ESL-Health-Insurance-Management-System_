<?php
include 'database.php';

$doc_ID=$_POST['DID'];
$doc_name=$_POST['Dname'];
$doc_specialization=$_POST['Dspecialization'];
$doc_payment=$_POST['Dpayment'];
$doc_hospital=$_POST['Dhospital'];

$sql = "UPDATE doctor SET Dname ='$doc_name',Dspecialization ='$doc_specialization',Dpayment ='$doc_payment' ,Dhospital ='$doc_hospital' WHERE DID='$doc_ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>