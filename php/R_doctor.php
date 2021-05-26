 <?php
include 'db.php';

$sql = "SELECT DID, Dname, Dspecialization, Dpayment, Dhospital FROM  Doctor";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Doc_ID: " . $row["DID"]. " Doc_Name: " . $row[" Dname"]. "Doc_Specialization"  . $row["Dspecialization"]. " Doc_Payment: " . $row["Dpayment"]. " Doc_Hospital: " . $row["Dhospital"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 