<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EsL Health Insurance</title>
    <link rel="stylesheet" href="./styles/signUpStyle.css">
    <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/fontawesome-free-5.15.3-web/css/all.css">
    <!-- <script src="./JS/signUpScript.js"></script> -->
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
            <a class="active" href="signup.php">Sign Up</a>
            <div class="login-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </header>

    <div style="font-weight: bold; margin-top: 20px;">
        <br>
        <br>
        <h2 id="regHead" style="color:#4e4e50; left:430px;">Register for an account</h2>
        <br>
        <form  action =>
            <fieldset class="mainFieldset">
                <legend>Personal Information</legend>
                <label for="fullName">Full Name</label>
                <input type="text" name="fullName" id="fullName" required>
                <p id="rqrd">*Required</p>
                <br>
                <br>
                <label for="NIC">NIC Number</label>
                <br>
                <input type="text" name="NIC" id="NIC" maxlength="12" pattern="/(^[0-9]{9}[V,X]$)|(^[0-9]{12}$)/i" required>
                <p id="rqrd">*Required</p>
                <br>
                <br>
                <label for="pTpNo">Telephone Number(Private)</label>
                <br>
                <input type="tel" name="pTpNo" id="pTpNo" pattern="/^[0-9]{3}-[0-9]{7}$/" maxlength="11" placeholder="012-3456789">

                <p id="rqrd">*Required</p>

                <br>
                <br>
                <label for="pTpNo">Email Address</label>
                <br>
                <input type="email" name="eAddress" id="eAddress">
                <br>
                <br>
                <label for="NIC">Address(Residential/Permanent)</label><br>
                <textarea name="pAddress" id="pAddress" cols="30" rows="7" required></textarea>
                <p id="rqrd">*Required</p>
                <br>
                <br>
                <label for="DOB">Date of Birth</label>
                <br>
                <input type="date" name="DOB" id="DOB" min="1900-12-31" max="2020-01-01" required>
                <p id="rqrd">*Required</p>
                <br>
                <br>
                <p>Civil Status</p>
                <input type="radio" name="marriage" value="married" id="married" required class="radio">
                <label for="married">Married</label>

                <input type="radio" name="marriage" value="unmarried" id="unmarried" class="radio" required>
                <label for="unmarried">Unmarried</label>
                <p id="rqrd">*Required</p>
                <br>
                <br>

                <p>Nationality</p>

                <input type="radio" name="nationality" value="Sinhala" id="Sinhala" class="radio" required>
                <label for=" Sinhala">Sinhala</label><br>
                <input type="radio" name="nationality" value="Tamil" id="Tamil" class="radio" required>
                <label for="Tamil">Tamil</label><br>
                <input type="radio" name="nationality" value="Muslim" id="Muslim" class="radio" required>
                <label for="Muslim">Muslim</label><br>
                <input type="radio" name="nationality"value="Burger" class="radio" required>
                <label for="Burger">Burger</label><br>
                <input type="radio" name="nationality" value="natOther"id="natOther" class="radio" required>
                <label for="natOther">Other</label>
                <p id="rqrd">*Required</p>
                <br><br>
                <p>Religion</p>

                <input type="radio" name="Religion" value="Budhdhism"id="Budhdhism" class="radio">
                <label for="Budhdhism">Budhdhism</label>
                <br>
                <input type="radio" name="Religion" value="Hinduism"="Hinduism"id="Hinduism" class="radio">
                <label for="Hinduism">Hinduism</label><br>
                <input type="radio" name="Religion" value="Islam"id="Islam" class="radio">
                <label for="Islam">Islam</label><br>
                <input type="radio" name="Religion" value="Christianity" id="Christianity" class="radio">
                <label for="Christianity">Christianity</label><br>
                <input type="radio" name="Religion" value="relOther"id="relOther" class="radio">
                <label for="rellOther">Other</label>
                <p id="rqrd">*Required</p>
                <br><br>
            </fieldset>
            <p id="invalidTpNo">Oops! Invalid telephone number!</p>
            <p id="invalidemail">Oops! Invalid email address. Email should be <br> of the format harrypotter@hogwarts.com</p>
            <p id="invalidNIC">Oops! Invalid NIC number!</p>
            <br>
            <br>
            <div id="overlay"></div>
            <fieldset class="mainFieldset">
                <legend>Source of Income</legend>
                <fieldset class="subFieldset">
                    <legend>Employment</legend>
                    <p id="rqrd">*All the fields are required if employed.</p>
                    <br>
                    <label for="empName">Name of the Employer</label>
                    <br>
                    <input type="text" name="empName" id="empName">
                    <br>
                    <br>
                    <label for="empAddress">Address</label>
                    <br>
                    <textarea name="empAddress" id="empAddress" cols="30" rows="7"></textarea>
                    <br>
                    <br>
                    <label for="designation">Designation</label>
                    <br>
                    <input type="text" name="designation" id="designation">
                    <br><br>
                    <label for="empPeriod">Period of Employment(in years)</label>
                    <br>
                    <input type="number" name="empPeriod" id="empPeriod" min="0" max="100">
                    <br>
                    <br>
                </fieldset>

                <br>

                <fieldset class="subFieldset">
                    <legend>Business</legend>
                    <p id="rqrd">*All the fields are required if you are a business owner.</p>
                    <br>

                    <label for="busName">Name of Business</label>
                    <br>
                    <input type="text" name="busName" id="busName">
                    <br>
                    <br>
                    <label for="busType">Type of Business</label>
                    <br>
                    <input type="text" name="busType" id="busType">
                    <br>
                    <br>
                    <label for="busAddress">Business Address</label>
                    <br>
                    <textarea name="busAddress" id="busAddress" cols="30" rows="7"></textarea>
                    <br>
                    <br>
                    <label for="busAnTurnover">Annual Turnover</label>
                    <br>
                    <input type="number" name="busAnTurnover" id="busAnTurnover" min="0" placeholder="Rs."> .00
                    <br>
                    <br>

                </fieldset>
                <br>
                <fieldset class="subFieldset">
                    <legend>Self-employment</legend>
                    <p id="rqrd">*All the fields are required if you are Self-employed.</p>
                    <br>

                    <label for="sEmpName">Nature of Self Employment</label>
                    <br>
                    <textarea name="sEmpName" id="sEmpName" cols="30" rows="5"></textarea>
                    <br>
                    <br>
                    <label for="selfAnTurnover">Annual Turnover</label>
                    <br>
                    <input type="number" name="selfAnTurnover" id="selfAnTurnover" min="0" placeholder="Rs."> .00
                    <br>
                    <br>
                    <label for="sPeriod">Period in Self-employment(in years)</label>
                    <br>
                    <input type="number" name="sPeriod" id="sPeriod" min="0" max="100">
                </fieldset>
                <br>
            </fieldset>
            <br>
            <fieldset class="mainFieldset">
                <br>
                <legend>Monthly Income</legend>

                <label for="empIncome">Gross Salary if Employed</label>
                <br>
                <input type="number" name="empIncome" id="empIncome" min="0" placeholder="Rs."> .00
                <br>
                <p id="rqrd">*Required if employed.</p><br>
                <label for="empIncome">Gross Income from Business/Self Employement</label>
                <br>
                <input type="number" name="busSelfIncome" id="busSelfIncome" min="0" placeholder="Rs."> .00
                <br>
                <p id="rqrd">*Required if you are a business owner or if you are self employed.</p><br>
                <br>
                <label for="otherIncome">Income from other sources</label>
                <br>
                <input type="number" name="otherIncome" id="otherIncome" min="0" placeholder="Rs."> .00
                <br><br>
                <label for="totIncome">Total/Gross Income</label>
                <br>
                <input type="number" name="totIncome" id="totIncome" min="0" placeholder="Rs."> .00
                <br>
                <p id="rqrd">*Required</p><br>
                <label for="totMonDed">Total Monthly deductions and Expenditure</label>
                <br>
                <input type="number" name="totMonDed" id="totMonDed" min="0" placeholder="Rs."> .00
                <br>
                <p id="rqrd">*Required</p><br>
                <label for="netIncome">Net Income</label>
                <br>
                <input type="number" name="netIncome" id="netIncome" min="0" placeholder="Rs."> .00
                <br>
                <p id="rqrd">*Required</p>
                <br>
            </fieldset>
            <br>
            <fieldset class="mainFieldset">
                <br>
                <legend>Details of Bank Accounts</legend>
                <table border="1" id="bankAccounts">
                    <thead>
                        <th>Name of the bank</th>
                        <th>Name of the branch</th>
                        <th>Account number</th>
                        <th>Account type</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><select name="selectBankName" id="selectBankName">
                                <option value="Amana_Bank">Amana Bank</option>
                                <option value="Bank_of_Ceylon">Bank of Ceylon</option>
                                <option value="Bank_of_China_Limited">Bank of China Limited</option>
                                <option value="Cargills_Bank_Limited">Cargills Bank Limited</option>
                                <option value="Citibank_N.A.">Citibank N.A.</option>
                                <option value="Commercial_Bank_of_Ceylon">Commercial Bank of Ceylon</option>
                                <option value="Deutsch_Bank_AG">Deutsche Bank AG</option>
                                <option value="DFCC_Bank_PLC">DFCC Bank PLC</option>
                                <option value="Habib_Bank_Ltd">Habib Bank Ltd</option>
                                <option value="Hatton_National_Bank_PLC">Hatton National Bank PLC</option>
                                <option value="Indian_Bank">Indian Bank</option>
                                <option value="Indian_Overseas_Bank">Indian Overseas Bank</option>
                                <option value="MCB_Bank_Ltd">MCB Bank Ltd</option>
                                <option value="National_Development_Bank">National Development Bank</option>
                                <option value="Nations_Trust_Bank_PLC">Nations Trust Bank PLC</option>
                                <option value="Pan_Asia_Banking_Corporation">Pan Asia Banking Corporation</option>
                                <option value="People's_Bank">People's Bank</option>
                                <option value="Public_Bank_Berhad">Public Bank Berhad</option>
                                <option value="Sampath_Bank_PLC">Sampath Bank PLC</option>
                                <option value="Seylan_Bank_PLC">Seylan Bank PLC</option>
                                <option value="Standard_Chartered_Bank">Standard Chartered Bank</option>
                                <option value="State_Bank_of_India">State Bank of India</option>
                                <option value="HSBC">HSBC</option>
                                <option value="Union_Bank_of_Colombo_PLC">Union Bank of Colombo PLC</option>
                                <option value="HDFC">HDFC</option>
                                <option value="NSB">NSB</option>
                                <option value="RDB">RDB</option>
                                <option value="SLS">SLS</option>
                                <option value="SMIB">SMIB</option>
                                <option value="SDB_Bank_&_U_pay">SDB Bank & U pay</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="branchName" id="branchName">
                            </td>
                            <td>
                                <input type="number" name="accNum" id="accNum" min="0">
                            </td>
                            <td>
                                <select name="accType" id="accType">
                                    <option value="savings">Saving</option>
                                    <option value="fixed_deposit">Fixed Deposit</option>
                                    <option value="current">Current</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <button id="addAcc" onclick="addRow()">&nbsp;+&nbsp;</button>
                <!-- <label for="bankName">Name of the bank where the account is maintained</label>

                        <input type="text" name="bankName" id="bankName"> -->
            </fieldset>
            

            <fieldset class="mainFieldset">
                <legend>Insurance Plan</legend>
                <p id="rqrd">*Required</p>
                <label for="insPlan">Select your preferred insurance plan</label>
                <br>
                <br>
                <select name="insPlan" id="insPlan">
                    <option value="">Medicare</option>
                    <option value="">Medicaid</option>
                    <option value="">Individual & family +</option>
                    <option value="">Employer</option>
                </select>
                <br>
                <br>
                <p>Click
                    <a href="#">here</a> to learn more about our Insurance plans.
                </p>
                <br>

            </fieldset>
            <fieldset class="mainFieldset" id="insAccDetails">
                <p id="rqrd">*All fields are required.</p>
                <legend>Account Details</legend>
                <br>
                <label for="userName">Enter a user name for your account(User name can consist of only english simple letters,digits and underscores)</label><br><br>
                <input type="text" name="userName" id="userName" placeholder="Username"><br><br><br>
                <label for="pwd">Enter a password for your account(password should consist of at least an english uppercase letter, a lowercase letter, a digit and it should be at least 8 characters long)</label><br><br>
                <input type="password" name="pwd" id="pwd" placeholder="Password"><br><br>
                <input type="password" name="repwd" id="repwd" placeholder="Re-type password" disabled=true><br>
            </fieldset>
            <p id="invUsername">Sorry, this username is already in use.</p>
            <div>
                <div id="pwdMessage">
                    <h3 style="color: #4e4e50;">Password must contain the following:</h3>
                    <p id="simple" class="invalidPwd">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalidPwd">A <b>capital(uppercase)</b> letter</p>
                    <p id="number" class="invalidPwd">A <b>number</b></p>
                    <p id="length" class="invalidPwd">Minimum <b>8</b> characers</p>
                </div>
            </div>

            <div id="invRepwd">Passwords do not match.</div><br>
            <div id="termsDiv">
                <input type="checkbox" name="terms" id="terms">
                <label for="terms" style="font-size: large; font-weight: normal;">I accept the <a href="./TermsConditions.html">terms and conditions</a> of this Insurance Policy.</label>
                <br>
            </div>

            <input type="submit" value="Submit" id="formSubmit" disabled=true>
        </form>
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
        //validate NIC
        var NIC = document.getElementById("NIC");


        NIC.onfocus = () => {
            if (!NIC.value.match(/(^[0-9]{9}[V,X]$)|(^[0-9]{12}$)/ig)) {
                document.getElementById("invalidNIC").style.display = "block";
            }
        }
        NIC.onblur = () => {
            document.getElementById("invalidNIC").style.display = "none";
        }

        NIC.onkeyup = () => {
            if (NIC.value.match(/(^[0-9]{9}[V,X]$)|(^[0-9]{12}$)/ig)) {
                document.getElementById("invalidNIC").style.display = "none";
            } else {
                document.getElementById("invalidNIC").style.display = "block";
            }

        }

        //validate telephone number
        var tpNo = document.getElementById("pTpNo");


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



        //validate email

        var emailAddress = document.getElementById("eAddress");


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



        //validate password
        var myPwd = document.getElementById("pwd");
        var letter = document.getElementById("simple");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");
        myPwd.onfocus = () => {
            document.getElementById("pwdMessage").style.display = "block";
        }
        myPwd.onblur = () => {
            document.getElementById("pwdMessage").style.display = "none";
        }
        myPwd.onkeyup = () => { //validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myPwd.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalidPwd");
                letter.classList.add("validPwd");
            } else {
                letter.classList.remove("validPwd");
                letter.classList.add("invalidPwd");
            } //validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myPwd.value.match(upperCaseLetters)) {
                capital.classList.remove("invalidPwd");
                capital.classList.add("validPwd");
            } else {
                capital.classList.remove("validPwd");
                capital.classList.add("invalidPwd");
            } //validate numbers
            var numbers = /[0-9]/g;
            if (myPwd.value.match(numbers)) {
                number.classList.remove("invalidPwd");
                number.classList.add("validPwd");
            } else {
                number.classList.remove("validPwd");
                number.classList.add("invalidPwd");
            } //validate length
            if (myPwd.value.length >= 8) {
                length.classList.remove("invalidPwd");
                length.classList.add("validPwd");
            } else {
                length.classList.remove("validPwd");
                length.classList.add("invalidPwd");
            }

            if (myPwd.value.match(lowerCaseLetters) && myPwd.value.match(upperCaseLetters) && myPwd.value.match(numbers) && myPwd.value.length >= 8) {
                document.getElementById("repwd").disabled = false;
            } else {
                document.getElementById("repwd").disabled = true;
            }
        }

        //validate retype password
        var retypePwd = document.getElementById("repwd");

        retypePwd.onfocus = () => {
            if (retypePwd.value != myPwd.value) {
                document.getElementById("invRepwd").style.display = "block";
            } else {
                document.getElementById("invRepwd").style.display = "none";
            }
        }

        retypePwd.onblur = () => {
            document.getElementById("invRepwd").style.display = "none";
        }


        retypePwd.onkeyup = () => {
            if (retypePwd.value !== myPwd.value) {
                document.getElementById("invRepwd").style.display = "block";
            } else {
                document.getElementById("invRepwd").style.display = "none";
            }
        }


        function addRow() {
            document.getElementById("bankAccounts")
        }
    </script>
</body>

</html>

</html>