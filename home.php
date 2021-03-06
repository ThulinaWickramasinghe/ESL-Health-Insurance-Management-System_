<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsL Health Insurance</title>
    <link rel="stylesheet" href="./styles/homeStyle.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <header>
        <div id="top">

            <img src="./images/logoFinal.png" alt="" id="logo" height="100px">
            <h1 id="brand">Health Insurance</h1>
            <h4 id="wadana">Let us take care of you...</h4>

        </div>

        <div class="topnav">
            <a class="active" href="home.html">Home</a>
            <a href="category.php">Category</a>
            <a href="products_services.php">Products & Services</a>
            <a href="contact.html">Contact Us</a>
            <a href="about.html">About Us</a>
            <a href="signup.php">Sign Up</a>
            <div class="login-container">
                <form action="./php/login.php" method="POST">
                    <input type="text" placeholder="Username" name="loginUserName">
                    <input type="password" placeholder="Password" name="loginPwd">
                    <button type="submit" name="loginSubmit">Login</button>
                </form>
            </div>
            <div id="afterLogin">
                <div class="aldiv" id="userProflink"><a href="./user.php"><i class="fas fa-user-circle fa-lg"></i></a></div>
                <div class="aldiv" id="userNameDisplay">username username</div>
                <div class="aldiv" id="logoutButton"><button>Log Out</button></div>
            </div>
        </div>
    </header>

    <main class="main">
        <section id="home">
            <div id="slider" class="slider">
                <h1 id="welcomeText">Welcome to <br> ESL Health Insurance...</h1>
            </div>
        </section>
    </main>

    <footer>
        <section id="boxes">
            <section id="end">
                <div class="container">
                    <div class="box">
                        <div id="legacy">
                            <h3>Easy Sri Lanka Insurance Pvt(ltd)</h3>
                            <p>Since 1987, Easy Sri Lanka Insurance Pvt(ltd) is reputed as a huge cooperation in the insurance sector. While looking after Sri Lankans when they need us the most, our company is giving an immense contribution to the economy
                                as well.
                            </p>
                        </div>
                    </div>
                    <div class="box">
                        <div id="contactInfo">
                            <ul>
                                <li><i class="fas fa-map-marker-alt"></i>&nbsp; 106,Havelock Road,Colombo 05</li>
                                <br>
                                <li><i class="fas fa-phone-square-alt"></i> &nbsp;0112 461 461</li>
                                <br>
                                <li><i class="fas fa-envelope"></i> &nbsp;easysrilanka1@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="box">
                        <div id="social">
                            <h4>Follow Us On Social Media</h4>
                            <br>
                            <ul>
                                <li>
                                    <a href="https://twitter.com/SriEasy"><i class="fab fa-twitter-square"></i>&nbsp;Twitter</a>
                                </li>

                                <li>
                                    <a href="https://www.facebook.com/EasySriLanka/"><i class="fab fa-facebook-square"></i>&nbsp;Facebook</a>
                                </li>

                                <li>
                                    <a href="https://www.youtube.com/channel/UCn034vqtqCiakhtZc9N_F4g"><i class="fab fa-youtube"></i>Youtube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <div id="copyrights">
            <p>&copy; 2021 Easy Sri Lanka Health Insurance Pvt(ltd). All rights reserved.</p>
        </div>


    </footer>

    <?php

    $script = <<< JS

    function doThis() {
    var beforeLogin = document.getElementsByClassName("login-container");
        var afterLogin = document.getElementById("afterLogin");
        beforeLogin.styles.display = "none";
        afterLogin.styles.display = "inline";
    });

    doThis();
    JS;


    if ($_SESSION["validUser"] == true) {
    ?>
        <script>
            <?php echo "$script" ?>
        </script>
    <?php } ?>


</body>

</html>