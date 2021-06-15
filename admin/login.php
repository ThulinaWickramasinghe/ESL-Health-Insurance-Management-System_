<?php

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin Login</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="body_st">
        <div class="login-section">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-header">
                        <label>Admin Panel Login</label>
               
                    </div>
                    <div class="login-form">
                        <form class="login-form-content" action="backend/login.php" method="POST">
                            <input id="username" class="text-fields" type="text" placeholder="Username" name="username" required="" >
                            <input id="password" class="text-fields" type="password" placeholder="Password" name="password" required="" >

                            <button class="btn-sign" type="submit" name="submit" >Sign In</button>
                            <a href="#">Reset password</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>