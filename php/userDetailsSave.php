<?php
	//IT20654962
	    
      if(isset($_POST["save"])){
		  //provide db connection
	      require 'C_database.php';
	
		   $userNameUp=$_POST["username"];		  
		   $emailNew=$_POST["email"];
		   $userID=$_POST["userID"];		  	   		  
		   $passwordNew=$_POST["password"];
		   $newMobile=$_POST["mobile_number"];
		   $userAddress=$_POST["address"];
		   		   
	  		  		   
$sqlstatement="Update user_details
               SET  newUserName='$userNameUp',
			   newPwd='$passwordNew',newtpno=$newMobile,userAddress='$userAddress',
			   emailAddress='$emailNew'
               WHERE UID='$userID';";						  
		   if(mysqli_query($conn,$sqlstatement)){
			  
			header("Location:../userProfile.php?editsuccess");
			  
			
		   }else{
			   echo "Error cannot update user because: ".$conn->error;
		   }		   
	   }else{
		   //redirect  user  to homepage, if they try to access unathorized files
		   header("Location:index.php?unauthorizedaccess");
	   }	
	
	?>
	
	