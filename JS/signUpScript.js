var NIC = document.getElementById("NIC");

function validateForm() {
    var tpNo = document.getElementById("pTpNo").value;


    if (!(/[0-9]{3}-[0-9]{7}/.test(tpNo))) {}

    if (repswrd !== pswrd) {
        alert("passwords do not match!");
    }


}

var myInput = document.getElementById("pwd");
var letter = document.getElementById("simple");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length"); //when the
//user clicks on the password field, show the message
myInput.onfocus = function() {
        document.getElementById("pwdMessage").style.display = "block";
    } //when the user clicks outside of the password field, hide the message 
myInput.onblur = function() {
        document.getElementById("pwdMessage").style.display = "none";
    } //when the user starts to type something inside the password field 
myInput.onkeyup = function() { //validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalidPwd");
        letter.classList.add("validPwd");
    } else {
        letter.classList.remove("validPwd");
        letter.classList.add("invalidPwd");
    } //validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalidPwd");
        capital.classList.add("validPwd");
    } else {
        capital.classList.remove("validPwd");
        capital.classList.add("invalidPwd");
    } //validate numbers
    var numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalidPwd");
        number.classList.add("validPwd");
    } else {
        number.classList.remove("validPwd");
        number.classList.add("invalidPwd");
    } //validate length
    if (myInput.value.length >= 8) {
        length.classList.remove("invalidPwd");
        length.classList.add("validPwd");
    } else {
        length.classList.remove("validPwd");
        length.classList.add("invalidPwd");
    }
}