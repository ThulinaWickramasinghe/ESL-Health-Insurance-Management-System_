<?php

include_once './db_connection.php';

$id = $_GET['id'];


$sql = "DELETE FROM healthplans Where PID='$id'";


$result=$conn->query($sql);

if ($result === TRUE) {

    echo "Record Deleted successfully";
    echo "<script>window.location.replace('../all-plans.php')</script>";
} else {
    echo "An Error While Deleting the record: " ;
}