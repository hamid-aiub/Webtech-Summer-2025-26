let count = 0;
let click = 0;

function calculate() {
  count++; //1
  console.log("log inside the function");
  click++;
  if (click % 2 == 1) {
    console.log("inside if");
    // 1-> 2 ->3;
    const calculate = count++ - ++count;
    console.log(calculate);
  } else {
    console.log("inside else");
    console.log("count value before initializing", count);
    const calculate = 2 * count++ - count++;
    console.log(calculate);
  }
}

function validate() {
  const hasUsernameSuccess = validateUsername();
  if (hasUsernameSuccess) {
    return true;
  } else {
    return false;
  }
}
function validateUsername() {
  const username = document.getElementById("username").value;

  if (!username) {
    return false;
  }
}
