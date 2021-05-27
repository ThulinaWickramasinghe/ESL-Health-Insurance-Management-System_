<?php
include 'database.php';

$doc_ID=$_POST['DID'];


$sql="DELETE from Doctor WHERE DID='$doc_ID'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>