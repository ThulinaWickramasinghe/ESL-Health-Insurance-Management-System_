<?php

include_once './db_connection.php';
$id = $_POST['id'];
$pname = $_POST['name'];
$desc = $_POST['description'];
$price = $_POST['price'];



$sql = "UPDATE healthplans set Pname='$pname', Pdescription='$desc', Pprice='$price'
Where PID='$id'";
$result=$conn->query($sql);

if ($result === TRUE) {

    echo "Record updated successfully";
    echo "<script>window.location.replace('../all-plans.php')</script>";
} else {
    echo "An Error While updating record: ";
}