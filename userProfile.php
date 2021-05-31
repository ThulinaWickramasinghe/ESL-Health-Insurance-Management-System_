<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsL Health Insurance</title>
    <link rel="stylesheet" href="./styles/userProfileStyles.css">
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
            <a href="category.php">Category</a>
            <a href="products_services.php">Products & Services</a>
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

    <div style="height: 60vh; font-weight: bold; margin-top: 20px">
        <div id="containerBox">
            <h3 id="welcome">Hi <span>Name Here</span>!</h3>
            <img src="./images/user_icon.png" alt="user's profile picture" id="profilePic" style="border: 1px solid black;">
            <div id="addressDiv" class="subDiv">
                <span class="labels">Address</span>
                <input type="text" id="userAddress" name="userAddress" class="newAddress" placeholder="Hogwarts Castle, Highlands, Scotland, Great Britain">
                <button id="saveNewAddress" class="saveButtons newAddress" onclick="" type="submit">Save</button>
                <span class="currentDetailsAddress" id="userCurrentAddress" style="color: darkslategray;">User's Address Here</span>
                <button type="button" class="currentDetailsAddress editButtons" id="editAddressButton" onclick="showAddressEdit()">Edit</button><br>
            </div>
            <div id="tpNoDiv" class="subDiv">
                <span class="labels">Telephone</span>
                <input type="tel" id="newtpno" name="newtpno" class="newTPNo" pattern="/^[0-9]{3}-[0-9]{7}$/" maxlength="11" placeholder="012-3456789">
                <button id="saveNewtpno" class="saveButtons newTPNo" onclick="" type="submit">Save</button>
                <p id="invalidTpNo">Invalid telephone number!</p>
                <span class="currentDetails currentDetailsTP" id="userCurrentTpNo" style="color: darkslategray;">User's TP No here</span>
                <button type="" class="editButtons currentDetailsTP" id="editTPButton" onclick="showTPEdit()">Edit</button>
            </div>
            <div id="emailDiv" class="subDiv">
                <span class="labels">Email</span>
                <input type="email" name="emailAddress" id="emailAddress" class="newEmail" placeholder="albusdumbledore@hogwarts.com">
                <button id="saveNewEmail" class="saveButtons newEmail" onclick="" type="submit">Save</button>
                <p id="invalidemail">Invalid email address!</p>
                <span id="userCurrentEmail" class="currentDetailsEmail currentDetails" style="color: darkslategray;">User's email address here</span>
                <button type="button" id="editEmailButton" class="currentDetailsEmail editButtons" onclick="showEmailEdit()">Edit</button>
            </div>
            <button type="button" id="changePwd" onclick="enablePwdInput()">Change password</button>
            <div class="pwdInputDiv">

                <input type="password" name="currentPwd" id="currentPwd" placeholder="Enter current password">
                <input type="password" name="newPwd" id="newPwd" placeholder="Enter new password">
                <input type="password" name="retypeNewPwd" id="retypeNewPwd" placeholder="Re-type new password" disabled>
                <button type="submit" id="saveChangedPwd" disabled>Change</button>

            </div>
            <p id="invCurrentPwd">Invalid current password!</p>
            <p id="invNewPwd">New password is invalid!</p>
            <p id="mismatchPwd">New passwords don't match!</p>
            <div id="changeUserName">
                <span class="labels currentUsername" style="color: beige;">User Name</span>
                <button type="button" id="editUsernameButton" class="currentUsername" onclick="showUserNameEdit()" >Edit</button>
                <input type="text" name="newUserName" id="newUserName" class="newUsername" style="position: relative; width: 200px; right: 50px; display: none;">
                <button id="saveNewEmail" class="saveButtons newUsername" onclick="" type="submit" style="position: relative; left:-50px; display: none;">Save</button> 
            </div>

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
        function showAddressEdit()
        {
            var newAddress = document.getElementsByClassName("newAddress");
            var currentDetailsAddress = document.getElementsByClassName("currentDetailsAddress");
            for(let i = 0 ; i <= 1; i++){
                newAddress[i].style.display = "inline";
                currentDetailsAddress[i].style.display = "none";
            }
        }


        function showTPEdit()
        {
            var currentDetailsTP = document.getElementsByClassName("currentDetailsTP");
            var newTPNo = document.getElementsByClassName("newTPNo");

               for (let i = 0; i <= 1; i++) {
                currentDetailsTP[i].style.display = "none";
                newTPNo[i].style.display = "inline";
            }
        }

        function showEmailEdit() 
        {
            var currentDetailsEmail = document.getElementsByClassName("currentDetailsEmail");
            var newEmail = document.getElementsByClassName("newEmail");

            for (let i = 0; i <= 1; i++) {
                currentDetailsEmail[i].style.display = "none";
                newEmail[i].style.display = "inline";
            }
        }

        function showUserNameEdit()
        {
            var currentUsername = document.getElementsByClassName("currentUsername");
            var newUsername = document.getElementsByClassName("newUsername");

            for (let i = 0; i <= 1; i++) {
                currentUsername[i].style.display = "none";
                newUsername[i].style.display = "inline";
            }
        }


         //validate email

            var emailAddress = document.getElementById("emailAddress");


            emailAddress.onfocus = () => {
                if (!emailAddress.value.match(/(^[a-z0-9]+@[a-z]+.[a-z.]+)/i)) {
                    document.getElementById("invalidemail").style.display = "block";
                }
            }


            emailAddress.onblur = () => {
                document.getElementById("invalidemail").style.display = "none";
            }


            emailAddress.onkeyup = () => {
                if (emailAddress.value.match(/(^[a-z0-9]+@[a-z]+.[a-z.]+)/i)) {
                    document.getElementById("invalidemail").style.display = "none";
                } else {
                    document.getElementById("invalidemail").style.display = "block";
                }
            }

        //validate telephone number
            var tpNo = document.getElementById("newtpno");


            tpNo.onfocus = () => {
                if (!tpNo.value.match(/[0-9]{3}-[0-9]{7}/)) {
                    document.getElementById("invalidTpNo").style.display = "block";
                }
            }
            tpNo.onblur = () => {
                document.getElementById("invalidTpNo").style.display = "none";
            }


            tpNo.onkeyup = () => {
                if (tpNo.value.match(/[0-9]{3}-[0-9]{7}/)) {
                    document.getElementById("invalidTpNo").style.display = "none";
                } else {
                    document.getElementById("invalidTpNo").style.display = "block";
                }

            }


//enable password input fields
function enablePwdInput()
{
    document.getElementsByClassName("pwdInputDiv")[0].style.visibility = "visible";
    document.getElementById("changePwd").style.visibility = "hidden";   
}


//validate new password

                var myPwd = document.getElementById("newPwd");
                var letter = document.getElementById("simple");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");
                myPwd.onfocus = () => {
                    var lowerCaseLetters = /[a-z]/g;
                    var upperCaseLetters = /[A-Z]/g;
                    var numbers = /[0-9]/g;
                    if (myPwd.value.match(lowerCaseLetters) && myPwd.value.match(upperCaseLetters) && myPwd.value.match(numbers) && myPwd.value.length >= 8) {
                        document.getElementById("invNewPwd").style.visibility = "hidden";
                    } else {
                        document.getElementById("invNewPwd").style.visibility = "visible";
                    }
                }
                myPwd.onblur = () => {
                    document.getElementById("invNewPwd").style.visibility = "hidden";
                }
                myPwd.onkeyup = () => {
                    var lowerCaseLetters = /[a-z]/g;
                    var upperCaseLetters = /[A-Z]/g;
                    var numbers = /[0-9]/g;
                    if (myPwd.value.match(lowerCaseLetters) && myPwd.value.match(upperCaseLetters) && myPwd.value.match(numbers) && myPwd.value.length >= 8) {
                        document.getElementById("invNewPwd").style.visibility = "hidden";
                        document.getElementById("retypeNewPwd").disabled = false;
                    } else {
                       document.getElementById("invNewPwd").style.visibility = "visible";
                       document.getElementById("retypeNewPwd").disabled = true;
                    }
                }


//validate retype password
            var retypePwd = document.getElementById("retypeNewPwd");

            retypePwd.onfocus = () => {
                if (retypePwd.value != myPwd.value) {
                    document.getElementById("mismatchPwd").style.visibility = "visible";
                } else {
                    document.getElementById("mismatchPwd").style.visibility = "hidden";
                }
            }

            retypePwd.onblur = () => {
                document.getElementById("mismatchPwd").style.visibility = "hidden";
            }


            retypePwd.onkeyup = () => {
                if (retypePwd.value !== myPwd.value) {
                    document.getElementById("mismatchPwd").style.visibility = "visible";
                    document.getElementById("saveChangedPwd").disabled = true;
                    
                } else {
                    document.getElementById("mismatchPwd").style.visibility = "hidden";
                    document.getElementById("saveChangedPwd").disabled = false;
                }
            }


        


    </script>
</body>

</html>