<?php
include 'db.php';
//Passing Values through the form
$user_add=$_POST['userAddress'];
$new_tel=$_POST['newtpno'];
$e_mail=$_POST['emailAddress'];
$n_pw=$_POST['newPwd'];
$new_name=$_POST['newUserName'];

//Query
$sql = "INSERT INTO User_details (user_address,new_tel,email,new_pw,new_name)
VALUES ('$user_add','$new_tel','$e_mail','$n_pw','$new_name')";

if (mysqli_query($conn, $sql)) {

  echo "<script>alert('New record created successfully')</script>";
echo "<script>location.replace('userProfile.html')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?> 