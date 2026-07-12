let quantity = 5;
function addToCart() {
  quantity--;
  if (quantity < 0) {
    document.getElementById("button").style.opacity = 0.5;
    document.getElementById("button").style.cursor = "not-allowed";
    document.getElementById("button").style.pointerEvents = "none";
  } else if (quantity == 0) {
    document.getElementById("qty").innerHTML = quantity;
    document.getElementById("button").style.opacity = 0.5;
    document.getElementById("button").style.cursor = "not-allowed";
    document.getElementById("button").style.pointerEvents = "none";
  } else {
    document.getElementById("qty").innerHTML = quantity;
  }
  return false;
}
