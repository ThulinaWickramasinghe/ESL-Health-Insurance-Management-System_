<?php
include 'C_database.php';

     $UID='1';

	 $username;	
	 $password;
	 $mobile;
	 $address;
	 $email;
	 $sqlstmt="SELECT * FROM user_details WHERE UID=$UID";
	 if($result=mysqli_query($conn,$sqlstmt)){
		 if($result->num_rows>0){
			 while($row=$result->fetch_assoc()){
			
	             $username=$row["newUserName"];	       
	             $password=$row["newPwd"];
	             $mobile=$row["newtpno"];
	             $address=$row["userAddress"];
	             $email=$row["emailAddress"];
			 }
		 }else{
			 echo "Cannot find this user";
			 
			 
		 }
		 		 
	 }else{
		 echo "Errors,User retriving:".$conn->error;
	 }
?>