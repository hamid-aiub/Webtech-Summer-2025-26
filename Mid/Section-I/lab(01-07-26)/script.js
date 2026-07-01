console.log("Connected");
const a  =10;
const b = 20;
console.log("The output is ", a+b);

var z = 10;
var z = "10";

console.log(typeof(z));

function setValue(){
    alert("Hi, click ok to close me");
    console.log("inside function");
    document.getElementById("title").innerHTML = "<i>Hi, today we are trying to learn how to show javascript using Inner HTML</i>";
    return false;
}


function validation(){
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    console.log("username ...", username);
    if(!username){
        document.getElementById("usernameErr").innerHTML = "Username is required";
    }else if(username.length < 3){
         document.getElementById("usernameErr").innerHTML = "Username should be at least 3 char";
    }else{
         document.getElementById("usernameErr").innerHTML = "";
    }

    if(!password){
        document.getElementById("passwordErr").innerHTML = "Password is required";
    }else if(password.length < 8){
        document.getElementById("passwordErr").innerHTML = "Password must be at least 8 char long";
    }else{
        document.getElementById("passwordErr").innerHTML = "";
    }
    return false;
}



