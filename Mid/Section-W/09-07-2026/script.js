function calculate() {
  const price = document.getElementById("price").value;
  const quantity = document.getElementById("quantity").value;
  if (quantity <= 0) {
    document.getElementById("quantityError").innerHTML =
      "Quantity must be at least 1";
    document.getElementById("quantityError").style.color = "red";
    document.getElementById("bill").value = 0;
  } else {
    document.getElementById("quantityError").innerHTML = "";
    const payable = price * quantity;
    document.getElementById("bill").value = payable;
  }

  return false;
}
