<?php
include 'db.php';
//Passing Values through the form

$plan_ID=$_POST['PID'];
$plan_name=$_POST['Pname'];
$plan_description=$_POST['Pdescription'];
$plan_price=$_POST['Pprice'];


//Query
$sql = "INSERT INTO Health_Plan (PID, Pname,Pdescription,Pprice)
VALUES ('$plan_ID', '$plan_name','$plan_description','$plan_price')";

if (mysqli_query($conn, $sql)) {

  echo "<script>alert('New record created successfully')</script>";
echo "<script>location.replace('admin.html')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?> 