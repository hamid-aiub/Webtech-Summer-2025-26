function calculate() {
  const price = document.getElementById("price").value;
  const quantity = document.getElementById("quantity").value;
  if (quantity <= 0) {
    document.getElementById("quantityError").innerHTML =
      "Quantity must be greater than 0";
    document.getElementById("quantityError").style.color = "red";
    document.getElementById("payable").value = 0;
    document.getElementById("button").style.display = "none";
  } else {
    document.getElementById("quantityError").innerHTML = "";
    document.getElementById("button").style.display = "inline-block";
  }
  return false;
}

function check() {
  const price = document.getElementById("price").value;
  const quantity = document.getElementById("quantity").value;
  const payable = price * quantity;
  document.getElementById("payable").value = payable;
  return false;
}

function clearForm() {
  console.log("from clear function");
  document.getElementById("quantity").value = 0;
  document.getElementById("payable").value = 0;
  return false;
}
