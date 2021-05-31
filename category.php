
 
 <?php 

include './php/C_database.php';

$sql = "SELECT PID,Pname,Pdescription,Pprice FROM  HealthPlans";

$Plan_ID=array();
$Plan_Name=array();
$Plan_Description=array();
$Plan_Price=array();



if($result = mysqli_query($conn, $sql)){      
if ($result->num_rows > 0) {
  // output data of each row
  while($row =$result->fetch_assoc()) {
   array_push($Plan_ID,$row["PID"]);
   array_push( $Plan_Name,$row["Pname"]);
   array_push($Plan_Description,$row["Pdescription"]);
   array_push( $Plan_Price,$row["Pprice"]) ;
  }
} else {
  echo "0 results";
}
} else{
  echo "Error because :".$conn->error;
}
?> 
 
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
        
                <legend id="sizeFont"><?php echo $Plan_Name[0];?></legend>
                <img src="./images/medicare-coupleFinale.jpeg" alt="" style="float:left; border-radius: 10px;">
                <p id="PnP">Plan ID : <?php echo $Plan_ID[0];?></p>
                <p><?php echo $Plan_Description[0];?></p>
                <p><?php echo $Plan_Price[0];?></p>
               
            </fieldset>
        </div>
        <div id="InFmP" style="overflow: auto;">
            <fieldset>
                <legend id="sizeFont"><?php echo $Plan_Name[1];?></legend>
                <img src="./images/individualAndFamilyPlanResized.jpeg" alt="" style="float: left; border-radius: 10px;">
                <p id="PnP">Plan ID : <?php echo $Plan_ID[1];?></p>
                <p><?php echo $Plan_Description[1];?></p>
                
                 <p><?php echo $Plan_Price[1];?></p>
            </fieldset>
        </div>

        <div id="medicaidP" style="overflow: auto;">
            <fieldset>
                <legend id="sizeFont"><?php echo $Plan_Name[2];?></legend>
                <img src="./images/medicaidPlanResized.jpeg" alt="" style="float: left; border-radius: 10px;">
                <p id="PnP">Plan ID : <?php echo $Plan_ID[2];?></p>
                <p><?php echo $Plan_Description[2];?></p>
                <br>
                 <p><?php echo $Plan_Price[2];?></p>
            </fieldset>
        </div>
        <div id="employerP" style="overflow: auto;">
            <fieldset>
                <legend id="sizeFont"><?php echo $Plan_Name[3];?></legend>
                <img src="./images/employerPanResized.jpeg" alt="" style="float: left; border-radius: 10px; ">
                <p id="PnP">Plan ID : <?php echo $Plan_ID[3];?></p>
                <p><?php echo $Plan_Description[3];?></p>
                <p><?php echo $Plan_Price[3];?></p>
             
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