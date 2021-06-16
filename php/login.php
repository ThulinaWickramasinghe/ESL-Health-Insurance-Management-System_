<?php


if(isset($_POST["loginSubmit"])){
    require "loginConfig.php";
    $loginUserName = $_POST["loginUserName"];
    $loginPwd = $_POST["loginPwd"];

    $checkUserName = "SELECT newPwd FROM user_details WHERE newUserName = $loginUserName";

    $result = $connect->query($checkUserName);


    if ($result->num_rows == 1) {
        //valid username

        if($result["newPwd"] == $loginPwd){
            $_SESSION["validUser"] = true;
        }else{
            //invalid password
            $_SESSION["validUser"] = false;
        }
      
    } else {
        //invalid username
        $_SESSION["validUser"] = false;
    }

    header("Location: ../home.php");
    exit();

}

?>