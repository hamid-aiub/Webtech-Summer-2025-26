function calculate() {
  const price = document.getElementById("productPrice").value;
  const quantity = document.getElementById("productQuantity").value;

  if (quantity <= 0) {
    document.getElementById("quantityError").innerHTML =
      "Quantity must be greater than 0";
    document.getElementById("quantityError").style.color = "red";
    document.getElementById("payable").value = 0;
    document.getElementById("button").style.display = "none";
  } else {
    document.getElementById("quantityError").innerHTML = "";
    const bill = price * quantity;
    document.getElementById("payable").value = bill;
    document.getElementById("button").style.display = "block";
  }
}
