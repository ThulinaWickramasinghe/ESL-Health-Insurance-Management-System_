 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsL Health Insurance</title>
    <link rel="stylesheet" href="./styles/categoryStyle.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
</head>

<body>
    <header>
        <div id="top">
            <?php echo "cat"?>

            <img src="./images/logoFinal.png" alt="" id="logo" height="100px">
            <h1 id="brand">Health Insurance</h1>
            <h4 id="wadana">Let us take care of you...</h4>

        </div>

        <div class="topnav">
            <a href="home.html">Home</a>
            <a class="active" href="category.html">Category</a>
            <a href="products_services.html">Products & Services</a>
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

    <div style=" height:100vh;font-weight: normal; margin-top: 20px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; " id="mainDiv">
    
        <h2 style="position:relative; font-weight: normal; text-align: center; right: 20px; margin-top: 30px; font-size: 25px; font-family: cursive;color: dimgray;">We offer you a variety of insurance plans so that you can select the one that suits you the best...</h2>
        <div id="medicareP" style="overflow: auto;">
            <fieldset onclick="displayMecicareDetails()">
                <legend id="sizeFont">Medicare Plans</legend>
                <img src="./images/medicare-coupleFinale.jpeg" alt="" style="float:left; border-radius: 10px;">
                <p id="PnP">Plan ID : PID0001</p>
                <p>Find options for Medicare plans, health insurance for people who are 65 or older, or those under 65 who may qualify because of a disability or another special situation.</p>

                <ul style="margin-left: 237px;">
                    <li>Medicare Advantage Plans</li>
                    <li>Medicare supplement Plans</li>
                    <li>Medicare Prescription Drug Plans</li>
                    <li>Dual Eligible Special Needs Plans</li>
                    <li id="PnP">Price : Rs.500,000</li>
                </ul>
            </fieldset>
        </div>
        <div id="InFmP" style="overflow: auto;">
            <fieldset>
                <legend id="sizeFont">Individual & Family +</legend>
                <img src="./images/individualAndFamilyPlanResized.jpeg" alt="" style="float: left; border-radius: 10px;">
                <p id="PnP">Plan ID : PID0002</p>
                <p>Browse plans for people and their families before age 65 and coverage to add on to other insurance plans, like term life or accident insurance.</p>
                <br>
                <ul style="margin-left: 240px;">
                    <li>Short term insurance</li>
                    <li>Student health insurance</li>
                    <li>Hospitalization insurance</li>
                    <li>Vision insurance</li>
                    <li id="PnP">Price : Rs.550,000</li>
                </ul>
            </fieldset>
        </div>

        <div id="medicaidP" style="overflow: auto;">
            <fieldset>
                <legend id="sizeFont">Medicaid Plans </legend>
                <img src="./images/medicaidPlanResized.jpeg" alt="" style="float: left; border-radius: 10px;">
                <p id="PnP">Plan ID : PID0003</p>
                <p>Find low cost medicaid plans for people who have limited incomes</p>
                <br>
                <ul style="margin-left: 240px;">
                    <li>Medicaid plans</li>
                    <li>Dual Special Needs Plans</li>
                    <li>Children's Health Insurance Program</li>
                    <li id="PnP">Price : Rs.650,000</li>
                </ul>
            </fieldset>
        </div>
        <div id="employerP" style="overflow: auto;">
            <fieldset>
                <legend id="sizeFont">Employer Plans</legend>
                <img src="./images/employerPanResized.jpeg" alt="" style="float: left; border-radius: 10px; ">
                <p id="PnP">Plan ID : PID0004</p>
                <p>Shop and get online quotes for health insurance plans for your employees, including medical, vision, dental, disability and more.</p>
                <br>
                <ul style="margin-left: 243px;">
                    <li>Small business plan</li>
                    <li>Large business plan</li>
                    <li>Self-employed plans</li>
                    <li>Public sector</li>
                    <li id="PnP">Price : Rs.550,000</li>
                </ul>
            </fieldset>
        </div>
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

    <script>
    </script>
</body>

</html>