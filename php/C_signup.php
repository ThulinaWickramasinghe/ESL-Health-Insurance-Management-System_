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



//Query
$query1 = "INSERT INTO Basic_D (fullName,NIC,pTpNo,eAddress,pAddress,DOB,marriage,nationality,Religion)
VALUES ('$full_name','$nic','$Telephone_Number','$Email_Address','$Address','$Date_of_Birth','$Civil_Status','$Nationality','$Religion')";

$query2 = "INSERT INTO Emp_D ( empName,empAddress,designation,empPeriod)
VALUES('$Employer_name'.'$Emp_Address','$Designation','$Emp_Period')";

$query3 = "INSERT INTO Business_D (busName,busType,busAddress,busAnTurnover )
VALUES('$Business_name','$Business_type','$Business_Address','$Annual_Turnover')";

$query4 = "INSERT INTO SelfEmp_D (sEmpName,selfAnTurnover,sPeriod )
VALUES('$Self_Employment','$Annual_over','$Self_employment_period')";

$query5 = "INSERT INTO Income (empIncome,busSelfIncome,otherIncome,totIncome,totMonDed ) 
VALUES('$Gross_Employed','$Gross_Business','$Other_Income','$Total_Income','$Tot_Expe')";

$query6 = "INSERT INTO Bank_D (selectBankName,branchName,accNum,accType)
VALUES('$BankName','$BranchName','$Acc_Num','$Acc_Type')";

$query4 = "INSERT INTO Account_D (insPlan,userName,pwd )
VALUES('$Insurance_Plan','$UserName','$password')";


if (mysqli_query($conn, $query1)) {

  echo "<script>alert('New record created successfully')</script>"; /////////////error checking//////////
echo "<script>location.replace('signup.html')</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?> 