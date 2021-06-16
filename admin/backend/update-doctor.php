<?php

include_once './db_connection.php';
$dname = $_POST['dname'];
$dspecialization = $_POST['dspecialization'];
$dpayment = $_POST['dpayment'];
$dhospital = $_POST['dhospital'];


$sql = "UPDATE doctor set Dname='$dname', Dspecialization='$dspecialization', Dpayment='$dpayment', Dhospital='$dhospital'
Where DID='$id'";
$result=$conn->query($sql);

if ($result === TRUE) {

    echo "Record updated successfully";
    echo "<script>window.location.replace('../doctor_details.php')</script>";
} else {
    echo "An Error While updating record: ";
}