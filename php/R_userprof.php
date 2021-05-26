<?php
include 'db.php';

$sql = "SELECT user_address,new_tel,email,new_pw,new_name FROM  User_details";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "User_Address: " . $row["user_address"]. " New_Number: " . $row[" new_tel"]." Email: " . $row["email"]. "New_Password: " . $row["new_pw"]. "New_Name: " . $row["new_name"]."<br>";}
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 