<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "health_insurance";

$connect = new mysqli($serverName, $userName, $password, $dbName);

if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>