var NIC = document.getElementById("NIC");

function validateForm() {
    var tpNo = document.getElementById("pTpNo").value;


    if (!(/[0-9]{3}-[0-9]{7}/.test(tpNo))) {}

    if (repswrd !== pswrd) {
        alert("passwords do not match!");
    }


}