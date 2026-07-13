let maxAttempts = 3;
let currentAttempt = 0;


function login(){
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    let hasUsernameError = true;
    let hasPasswordError = true;
    if(!username){
        document.getElementById("usernameError").innerHTML = "Username is requried";
        document.getElementById("usernameError").style.color = "red";
    }else if(username.length < 3){
        document.getElementById("usernameError").innerHTML = "Username must be more than or equal 3 char";
        document.getElementById("usernameError").style.color = "red";
    }else{
         document.getElementById("usernameError").innerHTML = "";
         hasUsernameError = false;
    }

    if(!password){
        document.getElementById("passwordError").innerHTML = "Password is required";
        document.getElementById("passwordError").style.color = "red";
    }else if(password.length < 4 ){ 
document.getElementById("passwordError").innerHTML = "Password should be greater than 4 char";
 document.getElementById("passwordError").style.color = "red";
    }else{
        document.getElementById("passwordError").innerHTML = "";
        hasPasswordError = false;
    }

    if(!hasUsernameError && !hasPasswordError){
      if(username == "aiub" && password == "student"){
        // given input matched
        document.getElementById("loginMessage").innerHTML = "Login Successful!";
        document.getElementById("loginMessage").style.color = "green";
        currentAttempt = 0;
        return true;
      }else{
        currentAttempt++;
         if(currentAttempt>=maxAttempts){
         document.getElementById("loginMessage").innerHTML = "You are locked for 5 minutes";
        document.getElementById("loginMessage").style.color = "red";
       } else{
        const leftAttempt = maxAttempts - currentAttempt;
         document.getElementById("loginMessage").innerHTML = "Login Failed. You have "+leftAttempt+" attempt left";
        document.getElementById("loginMessage").style.color = "red";
       }
      }
    }

return false;
    
}