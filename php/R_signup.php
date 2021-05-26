<?php
include 'db.php';

$query1 = "SELECT (fullName,NIC,pTpNo,eAddress,pAddress,DOB,marriage,nationality,Religion) FROM Basic_D";
$result1 = mysqli_query($conn,$query1 );

$query2 = "SELECT ( empName,empAddress,designation,empPeriod) FROM Emp_D";
$result2 = mysqli_query($conn,$query2 );

$query3 = "SELECT Business_D (busName,busType,busAddress,busAnTurnover ) FROM Business_D";
$result3 = mysqli_query($conn,$query3 );

$query4 = "SELECT (sEmpName,selfAnTurnover,sPeriod ) FROM SelfEmp_D";
$result4 = mysqli_query($conn,$query4 );

$query5 = "SELECT (empIncome,busSelfIncome,otherIncome,totIncome,totMonDed ) FROM Income";
$result5 = mysqli_query($conn,$query5 );

$query6 = "SELECT  (selectBankName,branchName,accNum,accType) FROM Bank_D";
$result6 = mysqli_query($conn,$query6 );

$query7 = "SELECT  (insPlan,userName,pwd ) FROM Account_D";
$result7 = mysqli_query($conn,$query7);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "User_Address: " . $row["user_address"]. " New_Number: " . $row[" new_tel"]." Email: " . $row["email"]. "New_Password: " . $row["new_pw"]. "New_Name: " . $row["new_name"]."<br>";}
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 