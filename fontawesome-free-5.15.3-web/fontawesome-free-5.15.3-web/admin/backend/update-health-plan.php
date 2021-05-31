<?php
include_once './db_connection.php';
$id=$_POST['id'];
$pname = $_POST['name'];
$desc = $_POST['description'];
$price = $_POST['price'];

$sql = "UPDATE healthplans set Pname='$pname', Pdesription='$desc', Pprice='$price')
Where id='$id";

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}