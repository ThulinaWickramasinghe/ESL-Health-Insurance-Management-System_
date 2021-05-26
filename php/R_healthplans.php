<?php
include 'db.php';

$sql = "SELECT PID, Pname,Pdescription,Pprice FROM  Health_Plan";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Plan_ID: " . $row["PID"]. " Plan_Name: " . $row[" Pname"]. "Plan_Description"  . $row["Pdescription"]. " Plan_Price: " . $row["Pprice"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 