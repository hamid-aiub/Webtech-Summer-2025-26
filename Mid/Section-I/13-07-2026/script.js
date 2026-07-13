const maxQuantity = 5;
let currentQty = 5;
function addToCart(){
    --currentQty;
    if(currentQty <0){
document.getElementById("button").style.opacity = '.5';
document.getElementById("button").style.cursor = "not-allowed"
document.getElementById("button").style.pointerEvents ="none"
    }else if(currentQty == 0){
    document.getElementById("qty").innerHTML = currentQty;
   document.getElementById("button").style.opacity = '.5';
    document.getElementById("button").style.cursor = "not-allowed"
    document.getElementById("button").style.pointerEvents ="none"
    }else{
        document.getElementById("qty").innerHTML = currentQty;
    }

    return false;
}