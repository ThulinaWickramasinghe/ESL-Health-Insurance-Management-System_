<?php
session_start();
if(empty($_SESSION['id'])){
        echo "<script>window.location.replace('./login.php')</script>";
}
?>
<div id="sidebar">
                <div class="img-profile">
                    <img src="./img/user_icon.png" alt="adminLogo" id="adminLogo">

                </div>
                <ul>

                    <a href="create-healthplans.php"><li>Manage Helth Plans</li></a> 
                    
                  
                
                    <a href="#" style="color: black; text-decoration: none;"><li >Manage Staff</li></a>
                </ul>

            </div>