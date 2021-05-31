<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsL Health Insurance</title>
    <link rel="stylesheet" href="./styles/productStyle.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="./styles/productsServicesDoc.css">
</head>

<body>
    <header>
        <div id="top">

            <img src="./images/logoFinal.png" alt="" id="logo" height="100px">
            <h1 id="brand">Health Insurance</h1>
            <h4 id="wadana">Let us take care of you...</h4>

        </div>

        <div class="topnav">
            <a href="home.html">Home</a>
            <a href="category.html">Category</a>
            <a class="active" href="products_services.html">Products & Services</a>
            <a href="contact.html">Contact Us</a>
            <a href="about.html">About Us</a>
            <a href="signup.html">Sign Up</a>
            <div class="login-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </header>

    <div style="height: 60vh; font-weight: bold; margin-top: 20px">
        <div class="slideshow">
        
            <div class="advertise">
                <h1 class="h1" id="text">FIND YOUR DOCTOR</h1>
                <h3 class="h3" id="text">Experience our new upgrade</h3>
                <p class="p" id="text">Now you can find your own doctor through our website</p>
        
            </div>
        
            <button class="left-button" id="button" onclick="plusDivs(-1)">&#10094;</button>
        
            <div class="card">
                <img class="image" src="./images/sakImg/doctor6.jfif">
                <div class="containerS">
                    <p><b>Dr. Waruni Rajapaksha</b></p>
                    <p>Dental Surgeon</p>
                </div>
            </div>
        
            <div class="card">
                <img class="image" src="./images/sakImg/doctor1.jpg">
                <div class="containerS">
                    <p><b>Dr. Pathum Gunasinghe</b></p>
                    <p>Cardiologist</p>
                </div>
            </div>
        
            <div class="card">
                <img class="image" src="./images/sakImg/doctor2.jfif">
                <div class="containerS">
                    <p><b>Dr. Nissanka Athapaththu</b></p>
                    <p>ENT Surgeon</p>
                </div>
            </div>
        
            <div class="card">
                <img class="image" src="./images/sakImg/doctor5.jfif">
                <div class="containerS">
                    <p><b>Dr. Kavishka Herath</b></p>
                    <p>Neurologist</p>
                </div>
            </div>
        
            <div class="card">
                <img class="image" src="./images/sakImg/doctor3.jpg">
                <div class="containerS">
                    <p><b>Dr. Kamal Punchihewa</b></p>
                    <p>VOG sergeon</p>
                </div>
            </div>
        
            <div class="card">
                <img class="image" src="./images/sakImg/doctor4.jfif">
                <div class="containerS">
                    <p><b>Dr. Pavani Rathnayaka</b></p>
                    <p>Anesthiologist</p>
                </div>
            </div>
        
        
            <button class="right-button" id="button" onclick="plusDivs(+1)">&#10095;</button>
        </div>
        <script src="pro.js"></script>
    </div>

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
    <script src="./JS/products_servicesDoc.js"></script>
</body>

</html>