<?php
include 'database.php';

$User_ID = $_POST['UID'];
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

////// images

$Insurance_Plan=$_POST['insPlan'];

$UserName=$_POST['userName'];
$password=$_POST['pwd'];

<<<<<<< HEAD
=======
$sql = "UPDATE  SET Basic_D fullName ='$full_name', NIC ='$nic', pTpNo ='$Telephone_Number', eAddress ='$Email_Address', pAddress ='$Address', DOB ='$Date_of_Birth', marriage ='$Civil_Status', nationality ='$Nationality', Religion ='$Religion', empName ='$Employer_name', empAddress ='$Emp_Address', designation ='$Designation', empPeriod ='$Emp_Period', busName ='$Business_name', busType ='$Business_type', busAddress ='$Business_Address', busAnTurnover ='$Annual_Turnover', sEmpName ='$Self_Employment', selfAnTurnover ='$Annual_over', sPeriod ='$Self_employment_period', empIncome ='$Gross_Employed', busSelfIncome ='$Gross_Business', otherIncome ='$Other_Income', totIncome ='$Total_Income', totMonDed ='$Tot_Expe', selectBankName ='$BankName', branchName='$BranchName', accNum ='$Acc_Num', accType ='$Acc_Type', insPlan ='$Insurance_Plan', userName ='$UserName', pwd ='$password'  WHERE UID='$User_ID' ";
>>>>>>> e1a4c87f41ae32cad84697757aeb86f2827d86a2

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>