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
    <link rel="stylesheet" href="./styles/hiddenBenefits.css">
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
            <a href="category.php">Category</a>
            <a class="active" href="products_services.php">Products & Services</a>
            <a href="contact.html">Contact Us</a>
            <a href="about.html">About Us</a>
            <a href="signup.php">Sign Up</a>
            <div class="login-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </header>

    <div style="font-weight: bold; margin-top: 20px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
        <div class="slideshow">
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
        <div class="advertise">
            <h1 class="h1" id="text">FIND YOUR DOCTOR</h1>
            <h3 class="h3" id="text">Experience our new upgrade</h3>
            <p class="p" id="text">Now you can find your own doctor through our website</p>
        </div>
        <script src="pro.js"></script>
    </div>


<div class="benifits">
    
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front" id="boc-card">
                <h2 class="t"><b>SPECIAL OFFER</b></h2>
                <div class="boc_images">
                    <img class="ben_image" id="boc" src="./images/sakImg/boc.jfif" alt="Avatar">
                    <img class="ben_image" id="discount" src="./images/sakImg/discount.jpg" alt="Avatar">
                </div>
                <h4>For all BOC credit card payments</h4>
            </div>
            <div class="flip-card-back">
                <div class="flipBackText">
                    <h2>10% DISCOUNT</h2>
                    <p class="dis">All BOC credit card holders will experience a 10% discount on every channeling session</p>
                    <p class="dis">Experience this offer through out the whole month</p>
                </div>  
            </div>
        </div>
    </div>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front" id="medical_checkup">
                <h2 class="t">ANNUAL MEDICAL CHECKUP</h2>
                <img class="ben_image" src="./images/sakImg/medical_checkup.jpg" alt="Avatar">
            </div>
            <div class=" flip-card-back">
                <div class="flipBackText">
                    <h2>World Health Day Special</h2>
                    <p>All members will be able to experience a full medical checkup on 7th of April regarding Worlds' Health Day</p>
                </div> 
            </div>
        </div>
    </div>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front" id="first_channeling">
                <h3 class="t">FIRST CHANNELING</h3>
                <img class="ben_image" src="./images/sakImg/dis.jpg" alt="Avatar">
                <h4>40% OFF</h4>
            </div>
            <div class="flip-card-back">
                <div class="flipBackText">
                    <h4>There will be a 40% discount on your first online channeling session</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front" id="gym">
                <h2 class="t">PHYSICAL FITNESS CENTRE FACILITIES</h2>
                <img class="ben_image" src="./images/sakImg/gym.jpg" alt="Avatar">
            </div>
            <div class="flip-card-back">
                <div class="flipBackText">
                    <h1>Gym Facilities</h1>
                    <p>Members can experience fantastic physical fitness facilities with special offers with your favourite gym</p>
                </div> 
            </div>
        </div>
    </div>

    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front" id="lucky_draw">
                <h2 class="t">LUCKY DRAW</h2>
                <img class="ben_image" id="maximise" src="./images/sakImg/lottery.jpg" alt="Avatar">
            </div>
            <div class="flip-card-back">
                <div class="flipBackText">
                    <h2>Random Lottery Drawings</h2>
                <p>There will be daily/weekly/monthly random lucky draws which will give different types of offers for members</p>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<h1 class="topic">HIDDEN BENIFITS</h1>
<hr>

<div class="block">
    <div class="firstRule">
        <div class="leftTopic">
            <p>Have any questions about health insurance plans?</p>
        </div>
        <div class="rightContent">
            <p>Why do you need an health insurance?</p>
        </div>
        <div class="rightContent">
            <p>What are different types of insurances?</p>
        </div>
        <div class="rightContent">
            <p>How does medicare work?</p>
        </div>
    </div>
    <div class="secondRule">
        <div class="leftTopic">
            <p>Why ESL?</p>
        </div>
        <div class="rightContent">
            <h4>Care whenever you need it</h4>
            <p>Find right care at the right time, no matter if that's your living room with virtual care or in your doctor's office.</p>
        </div>
        <div class="rightContent">
            <h4>Care where ever you are</h4>
            <p>We'll take care of you even when you are abroad</p>
        </div>
        <div class="rightContent">
            <h4>Care that's rewarding</h4>
            <p>Our excellent health care plans have brought us many awards including the award for 'The Best Healthcare Provider of the Year'.</p>
        </div>
    </div>
</div>

<hr>
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