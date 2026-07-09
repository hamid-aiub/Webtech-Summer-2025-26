const maxAttempts = 4;
let currentAttempts = 0;

function login() {
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  let hasUsernameError = true;
  let hasPasswordError = true;
  if (!username) {
    document.getElementById("usernameError").innerHTML = "Username is requried";
    hasUsernameError = true;
  } else if (username.length < 3) {
    document.getElementById("usernameError").innerHTML =
      "Username must be at least 3 char long";
    hasUsernameError = true;
  } else {
    document.getElementById("usernameError").innerHTML = "";
    hasUsernameError = false;
  }

  if (!password) {
    document.getElementById("passwordError").innerHTML = "Password is required";
    hasPasswordError = true;
  } else if (password.length < 6) {
    document.getElementById("passwordError").innerHTML =
      "Password must be at least 6 char long";
    hasPasswordError = true;
  } else {
    document.getElementById("passwordError").innerHTML = "";
    hasPasswordError = false;
  }

  if (!hasPasswordError && !hasUsernameError) {
    if (username == "aiub" && password == "student") {
      // hanele for login success
      currentAttempts = 0;
      document.getElementById("loginError").innerHTML = "Login Successfull";
      document.getElementById("loginError").style.color = "green";
    } else {
      currentAttempts++;
      if (currentAttempts >= maxAttempts) {
        document.getElementById("loginError").innerHTML =
          "You are locked for 5 minutes";
        document.getElementById("loginError").style.color = "red";
      } else {
        let leftAttemp = maxAttempts - currentAttempts;
        document.getElementById("loginError").innerHTML =
          "You have " + leftAttemp + " attempts left";
        document.getElementById("loginError").style.color = "red";
      }
    }
  }
  return false;
}
