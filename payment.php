<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsL Health Insurance</title>
    <link rel="stylesheet" href="./styles/paymentStyles.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
</head>


    <header>
        <div id="top">

            <img src="./images/logoFinal.png" alt="" id="logo" height="100px">
            <h1 id="brand">Health Insurance</h1>
            <h4 id="wadana">Let us take care of you...</h4>

        </div>

        <div class="topnav">
            <a class="active" href="home.html">Home</a>
            <a href="category.html">Category</a>
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

    <div class="area1"></div>
    <div class="main">
       <div class="title" >Online Payment</div>

<div class="details">
    <div class="btn">
        <p class="p1">Card Type</p> <p class="p2">:</p> <input type="radio"  name="Card"  value="Credit Card" requied> <img src="./IMAGES/visa card.png" height="20" width="45">
        <input type="radio"  name="Card"  value="Debit Card" requied> <img src="./IMAGES/master card.png" height="20" width="38">
    </div>
    <div class="inputDetails">
        <div class="Cnumber">
            <p class="p1">Card Number</p><p class="p2">:</p> <input type="text" class="det" placeholder="Valid Card Number">
        </div>
       <br>
        <div class="amount">
            <p class="p1">Amount</p><p class="p2">:</p>  <input type="text"  class="det" placeholder="Rs 00.00">
        </div>
        <br>
        <div class="dateNmounth">
            <p class="p1">Expire Date and Month</p> <p class="p2">:</p>   <input type="text" class="det" placeholder="DD / MM"> 
        </div>  
        <br>
        <div class="cvn">
            <p class="p1">CVN</p><p class="p2">:</p>  <input type="text"  class="det" placeholder="000">
        </div>
        <br>
    </div>
</div>
    <div class="agree"> 
        <input type="radio" >I here by authorize the debit to my master/visa account in favor of Easy Sri Lanka Insurance Pvt(ltd).
    </div>
    
    <div class="submit">
        <input type="button" value="Submit">
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


</html>