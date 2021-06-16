<?php

//if not successfully login first,THE session vaiable id will leave as empty
//No one can login without creating session,if the session variable is empty,it will automatically redirect into the login page
//This is to deny access by directly accesing a file from url without login

//starting session is compulosory to access to a session variable
session_start();
if(empty($_SESSION['id'])){
        echo "<script>window.location.replace('./login.php')</script>";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="header">
            <center>ESL Heath Management System Admin Panel
            </center>	

        </div>
        <div style="">
                     <?php include 'sidebar.php';?>
            <div>

                <div class="container">
                    <div style="display:100%">
                        <div style="padding:20px">

                            <div class="title" style="border: 1px solid;padding: 30px;">
                                Create Health Plan
                            </div>
                        </div>
                        <div style="padding:20px">

                            <div class="title" style="border: 1px solid;padding: 30px;">
                                <form style="text-align: center" method="POST" action="./backend/insert_healthplan.php">
                                    <div style="padding: 20px">
                                        <span>Name</span>
                                        <input type="text" name="name">
                                    </div>

                                    <div style="padding: 20px">
                                        <span>Description </span>
                                        <input type="text" name="description">
                                    </div>
                                    
                                    <div style="padding: 20px">
                                        <span>Price</span>
                                        <input type="text" name="price">
                                    </div>
                                    <div><button class="btn">Insert</button><div>

                                </form>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </body>
</html>