<?php

       if(isset($_POST["delete"])){
		   include 'C_database.php';
		    $userID=$_POST["userID"];
           //Sql statement to  delete  vendor.	  
		   $sqlDelete="DELETE FROM user_details WHERE UID=$userID;";
		   
		   if(mysqli_query($conn,$sqlDelete)){
			   //redirect to the login page  after user get deleted
			   header("Location:U_signup.php?userdeleted");
              
              		  
			  
		   }else{
			  echo "Error  delete user because: ".$conn->error;   
		  }
		   
		   
	     }
?>