function login(){
    document.getElementById("loginbutton").style.display = "none";
    document.getElementById("signoutbutton").style.display = "block";
    document.getElementById("signupbutton").style.display =  "none";
}

function signout() {
    document.getElementById("signoutbutton").style.display = "none";
    document.getElementById("loginbutton").style.display = "block";
    document.getElementById("signupbutton").style.display = "block";
}