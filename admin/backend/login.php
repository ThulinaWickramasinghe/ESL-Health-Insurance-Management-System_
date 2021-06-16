<?php
//starting session is compulosory to make session variables
session_start();
include 'db_connection.php';

if (isset($_POST['submit'])) {
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user_details where newUserName='$user_name' and newPwd='$password'";

    //Execute the query
    $result = mysqli_query($conn, $sql);

  

    if (mysqli_num_rows($result) > 0) {

        //Feed the result of the user data into an array
        $data_array = mysqli_fetch_assoc($result);

        //Create & Assign session variables
        
        $_SESSION['id'] = $data_array['UID'];

//        Test Whether the Session Id is successfully Assigned
//             echo($_SESSION['id']);
// exit();
     
//        Redirect into the Index if login passed
        echo "<script>window.location.replace('../index.php')</script>";
    } else {

        //Redirect into the Index if login failed
        echo "<script>window.location.replace('../login.php?id=1')</script>";
    }
}