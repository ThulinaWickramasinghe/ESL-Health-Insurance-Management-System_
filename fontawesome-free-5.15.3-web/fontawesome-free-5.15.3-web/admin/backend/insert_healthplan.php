<?php
include_once './db_connection.php';

$pname = $_POST['name'];
$desc = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO healthplans (Pname, Pdesription, Pprice)
VALUES ('$pname', '$desc', '$age')";

if (mysqli_query($conn, $sql)) {
    echo "<script>Helath Plan Suceesfully Inserted!</script>";
    echo "<script>window.location.replace('../create-healthplan.php')</script>";
} else {
  echo "<script>Can not Insert!</script>";
}

mysqli_close($conn);
?> 