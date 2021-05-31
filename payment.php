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
<form action="payment.php" Method="post">
<div class="details">
    <div class="btn">
        <p class="p1">Card Type</p> <p class="p2">:</p> 
		<input type="radio"  name="Card"  value="Credit Card" requied> <img src="./IMAGES/visa card.png" height="20" width="45">
        <input type="radio"  name="Card"  value="Debit Card" requied> <img src="./IMAGES/master card.png" height="20" width="38">
    </div>
    <div class="inputDetails">
        <div class="Cnumber">
            <p class="p1">Card Number</p><p class="p2">:</p> <input type="text" name="cnumber" class="det" placeholder="Valid Card Number">
        </div>
       <br>
        <div class="amount">
            <p class="p1">Amount</p><p class="p2">:</p>  <input type="text" name="amount" class="det" placeholder="Rs 00.00">
        </div>
        <br>
        <div class="dateNmounth">
            <p class="p1">Expire Date and Month</p> <p class="p2">:</p>   <input name="expdate" type="text" class="det" placeholder="DD / MM"> 
        </div>  
        <br>
        <div class="cvn">
            <p class="p1">CVN</p><p class="p2">:</p>  <input type="text" name="cvn" class="det" placeholder="000">
        </div>
        <br>
    </div>
</div>
    <div class="agree"> 
        <input type="radio" >I here by authorize the debit to my master/visa account in favor of Easy Sri Lanka Insurance Pvt(ltd).
    </div>
    
    <div class="submit">
        <input type="submit" name="formsubmit"  value="Submit">
    </div>
    </div>
	
</form>
<?php
   if(isset($_POST['formsubmit'])){
	   include './php/C_database.php';
	    $Card_type=$_POST['Card'];
		$Card_number=$_POST['cnumber'];
		$Amount=$_POST['amount'];
		$Expired=$_POST['expdate'];
		$CVN=$_POST['cvn'];
		
		$sqlstmt="INSERT INTO payment(payment_type,card_number,expire_date,amount,cvn)
		          VALUES ('$Card_type','$Card_number','$Expired',$Amount,$CVN)";
		
		if(!mysqli_query($conn,$sqlstmt)){
			echo "Error becuse".$conn->error;
		}
	   
	   
	   
	   
   }




?>	