let counter = 0;
function testOutput() {
  counter++;
  let arr = [10, 20, 30, 40, 50];

  if (counter % 2 == 0) {
    let val = 0;
    arr.map((a, index) => {
      val += a;
    });
    console.log(val / 2 + counter);
  } else {
    let val = 0;
    arr.map((a, index) => {
      val += a;
    });
    console.log(val * 2 - counter);
  }

  return false;
}
