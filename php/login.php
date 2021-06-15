<?php

if(isset($_POST["loginSubmit"])){

    require "loginConfig.php";
    $loginUserName = $_POST["loginUserName"];
    $loginPwd = $_POST["loginPwd"];

    $checkUserName = "SELECT newUserName , newPwd FROM user_details";

}



?>