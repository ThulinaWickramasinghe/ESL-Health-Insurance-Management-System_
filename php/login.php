<?php
$
if(isset($_POST["loginSubmit"])){
    require "loginConfig.php";
    $loginUserName = $_POST["loginUserName"];
    $loginPwd = $_POST["loginPwd"];

    $checkUserName = "SELECT newPwd FROM user_details WHERE newUserName = $loginUserName";

    $result = $connect->query($checkUserName);


    if ($result->num_rows == 1) {
        //valid username

        if($result["newPwd"] == $loginPwd){
            echo
            
        }else{
            //invalid password
        }
      
    } else {
        //invalid username
    }

    header("Location: ../home.html");
    exit();

}

?>