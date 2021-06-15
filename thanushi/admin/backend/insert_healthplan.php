<?php
include_once './db_connection.php';

$pname = $_POST['name'];
$desc = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO healthplans (Pname, Pdescription, Pprice)
VALUES ('$pname', '$desc', '$price')";
$result=mysqli_query($conn, $sql);
var_dump($result);
if ($result===TRUE) {
    echo "<script>Helath Plan Suceesfully Inserted!</script>";
    echo "<script>window.location.replace('../all-plans.php')</script>";
} else {
  echo "<script>Can not Insert!</script>";
}

mysqli_close($conn);
?> 