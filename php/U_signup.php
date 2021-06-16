<?php
include 'C_database.php';

if(isset($_POST['formSubmit'])){
	
$full_name=$_POST['fullName'];
$nic=$_POST['NIC'];
$Telephone_Number=$_POST['pTpNo'];
$Email_Address=$_POST['eAddress'];
$Address=$_POST['pAddress'];
$Date_of_Birth=$_POST['DOB'];
$Civil_Status=$_POST['marriage'];
$Nationality=$_POST['nationality'];
$Religion=$_POST['Religion'];

$Employer_name='NULL';
$Emp_Address='NULL';
$Designation='NULL';
$Emp_Period=0;

	$Business_name='NULL';
	$Business_type='NULL';
	$Business_Address='NULL';
	$Annual_Turnover=0.00;

$Self_Employment='NULL';
$Annual_over=0.00;
$Self_employment_period=0;
if(!(empty($_POST['empName'])&&empty($_POST['empAddress'])&&empty($_POST['designation'])&&empty($_POST['empPeriod']))){
$Employer_name=$_POST['empName'];
$Emp_Address=$_POST['empAddress'];
$Designation=$_POST['designation'];
$Emp_Period=$_POST['empPeriod'];
}

if(!(empty($_POST['busName'])&&empty($_POST['busType'])&&empty($_POST['busAddress'])&&empty($_POST['busAnTurnover']))){
$Business_name=$_POST['busName'];
$Business_type=$_POST['busType'];
$Business_Address=$_POST['busAddress'];
$Annual_Turnover=$_POST['busAnTurnover'];
}

if(!(empty($_POST['sEmpName'])&&empty($_POST['selfAnTurnover'])&&empty($_POST['sPeriod']))){
$Self_Employment=$_POST['sEmpName'];
$Annual_over=$_POST['selfAnTurnover'];
$Self_employment_period=$_POST['sPeriod'];
}



$Gross_Employed=$_POST['empIncome'];
$Gross_Business=$_POST['busSelfIncome'];
$Other_Income=$_POST['otherIncome'];
$Total_Income=$_POST['totIncome'];
$Tot_Expe=$_POST['totMonDed'];

$BankName=$_POST['selectBankName'];
$BranchName=$_POST['branchName'];
$Acc_Num=$_POST['accNum'];
$Acc_Type=$_POST['accType'];

////// images

$Insurance_Plan=$_POST['insPlan'];

$UserName=$_POST['userName'];
$password=$_POST['pwd'];

$sql = "INSERT INTO Basic_D(fullName,NIC, pTpNo,eAddress , pAddress , DOB , marriage , 
nationality , Religion, empName , empAddress ,designation , empPeriod , busName , busType ,
 busAddress , busAnTurnover , sEmpName ,selfAnTurnover , sPeriod, empIncome ,
 busSelfIncome , otherIncome, totIncome ,totMonDed , selectBankName , branchName, accNum , 
 accType, insPlan , userName , pwd ) VALUES('$full_name','$nic',$Telephone_Number,'$Email_Address',
 '$Address','$Date_of_Birth',
 '$Civil_Status','$Nationality','$Religion','$Employer_name','$Emp_Address','$Designation','$Emp_Period','$Business_name',
 '$Business_type','$Business_Address',$Annual_Turnover,'$Self_Employment',$Annual_over, $Self_employment_period,$Gross_Employed,
 $Gross_Business,$Other_Income,$Total_Income,$Tot_Expe,'$BankName','$BranchName',$Acc_Num,'$Acc_Type','$Insurance_Plan','$UserName',
 '$password')";

if ($conn->query($sql) === TRUE) {
 header("Location:../home.html?userSignedUp");
} else {
  echo "Error updating record: " . $conn->error;
}

//$conn->close();
}
?>