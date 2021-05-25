<?php
include 'db.php';
//Passing Values through the form
$doc_ID=$_POST['DID'];
$doc_name=$_POST['Dname'];
$doc_specialization=$_POST['Dspecialization'];
$doc_payment=$_POST['Dpayment'];
$doc_hospital=$_POST['Dhospital'];

//Query
$sql = "INSERT INTO Details (DID, Dname, Dspecialization, Dpayment, Dhospital)
VALUES ('$doc_ID', '$doc_name', '$doc_specialization', '$doc_payment', '$doc_hospital');

if (mysqli_query($conn, $sql)) {

  echo "<script>alert('New record created successfully')</script>";
echo "<script>location.replace('admin.html')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?> 