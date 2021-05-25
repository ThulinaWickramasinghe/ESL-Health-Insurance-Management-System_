<?php
include 'db.php';
//Passing Values through the form
$staff_ID=$_POST['SID'];
$staff_name=$_POST['Sname'];


//Query
$sql = "INSERT INTO Details (SID, Sname,)
VALUES ('$staff_ID', '$staff_name');

if (mysqli_query($conn, $sql)) {

  echo "<script>alert('New record created successfully')</script>";
echo "<script>location.replace('admin.html')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?> 