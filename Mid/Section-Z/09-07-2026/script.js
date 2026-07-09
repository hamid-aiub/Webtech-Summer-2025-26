let totalCount = 0;

function registration() {
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;

  let hasNameError = true;
  let hasEmailError = true;
  if (!name) {
    document.getElementById("nameError").innerHTML = "Name can not be empty";
    document.getElementById("nameError").style.color = "red";
    hasNameError = true;
  } else if (name.length < 3) {
    document.getElementById("nameError").innerHTML =
      "Name must be at least 3 char";
    document.getElementById("nameError").style.color = "red";
    hasNameError = true;
  } else {
    document.getElementById("nameError").innerHTML = "";
    hasNameError = false;
  }

  if (!email) {
    document.getElementById("emailError").innerHTML =
      "Email is a required fireld";
    document.getElementById("nameError").style.color = "red";
    hasEmailError = true;
  } else if (!email.includes("@")) {
    document.getElementById("emailError").innerHTML =
      "Please provide a valid email address";
    document.getElementById("nameError").style.color = "red";
    hasEmailError = true;
  } else {
    document.getElementById("emailError").innerHTML = "";
    hasEmailError = false;
  }

  if (!hasNameError && !hasEmailError) {
    document.getElementById("totalRegistrations").innerHTML = ++totalCount;
  }
  return false;
}
