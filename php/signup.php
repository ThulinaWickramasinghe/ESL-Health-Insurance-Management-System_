<?php
include 'db.php';
//Passing Values through the form
$full_name=$_POST['fullName'];
$nic=$_POST['NIC'];
$Telephone_Number=$_POST['pTpNo'];
$Email_Address=$_POST['eAddress'];
$Address=$_POST['pAddress'];
$Date_of_Birth=$_POST['DOB'];
$Civil_Status=$_POST['marriage'];
$Nationality=$_POST['nationality'];
$Religion=$_POST['Religion'];

$Employer_name=$_POST['empName'];
$Emp_Address=$_POST['empAddress'];
$Designation=$_POST['designation'];
$Emp_Period=$_POST['empPeriod'];

$Business_name=$_POST['busName'];
$Business_type=$_POST['busType'];
$Business_Address=$_POST['busAddress'];
$Annual_Turnover=$_POST['busAnTurnover'];

$Self_Employment=$_POST['sEmpName'];
$Annual_over=$_POST['selfAnTurnover'];
$Self_employment_period=$_POST['sPeriod'];

$Gross_Employed=$_POST['empIncome'];
$Gross_Business=$_POST['busSelfIncome'];
$Other_Income=$_POST['otherIncome'];
$Total_Income=$_POST['totIncome'];
$Tot_Expe=$_POST['totMonDed'];

$BankName=$_POST['selectBankName'];
$BranchName=$_POST['branchName'];
$Acc_Num=$_POST['accNum'];
$Acc_Type=$_POST['accType'];

//images//////////

$Insurance_Plan=$_POST['insPlan'];

$UserName=$_POST['userName'];
$password=$_POST['pwd'];

//checkbox///////////










//Query
$sql = "INSERT INTO Details (name, age, address)
VALUES ('$name', '$age', '$address')";

if (mysqli_query($conn, $sql)) {

  echo "<script>alert('New record created successfully')</script>";
echo "<script>location.replace('signup.html')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?> 