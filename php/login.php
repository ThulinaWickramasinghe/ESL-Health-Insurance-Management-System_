<?php
session_start();


if(isset($_POST["loginSubmit"])){
    
    include "C_database.php";
    $_SESSION["validUser"] = false;
    $loginUserName = $_POST["loginUserName"];
    $loginPwd = $_POST["loginPwd"];

    $checkUserName = "SELECT newPwd FROM user_details WHERE newUserName = '$loginUserName'";

   if($result = mysqli_query($conn,$checkUserName)){

        
    if ($result->num_rows >0) {
            
        //valid username
        $row=$result->fetch_assoc();
        if( $row["newPwd"] ===$loginPwd){
                echo "Works Here1";
            $_SESSION["validUser"] = true;
        }else{
            //invalid password
            $_SESSION["validUser"] = false;
                echo "Works Here2";
		
        }
      
    } else {
        //invalid username
        $_SESSION["validUser"] = false;
    }
   }else{
	   echo "Error because:".$conn->error;
   }
	header("Location: ../home.php" , false);
    exit();

}
?>