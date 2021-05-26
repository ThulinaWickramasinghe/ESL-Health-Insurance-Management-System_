<?php
include 'db.php';

$sql = "SELECT SID, Sname FROM  staff";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "staff_ID: " . $row["SID"]. " staff_Name: " . $row[" Sname"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 