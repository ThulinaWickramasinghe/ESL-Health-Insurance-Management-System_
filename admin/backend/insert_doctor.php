<?php
include_once './db_connection.php';

$dname = $_POST['dname'];
$dspecialization = $_POST['dspecialization'];
$dpayment = $_POST['dpayment'];
$dhospital = $_POST['dhospital'];

$sql = "INSERT INTO doctor (Dname, Dspecialization, Dpayment,Dhospital)
VALUES ('$dname', '$dspecialization', '$dpayment','$dhospital')";
$result=mysqli_query($conn, $sql);
var_dump($result);
if ($result===TRUE) {
    echo "<script>Doctor Details Suceesfully Inserted!</script>";
    echo "<script>window.location.replace('../doctor_details.php')</script>";
} else {
  echo "<script>Can not Insert!</script>";
}

mysqli_close($conn);
?> 