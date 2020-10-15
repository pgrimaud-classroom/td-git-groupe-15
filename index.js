let x = Math.ceil(Math.random() * 20);

if (x <= 10) {
  console.log(x);
  console.log("Bof!!!");
} else if (x > 10 && x <= 12) {
  console.log(x);
  console.log("Passable!!!");
} else if (x > 12 && x <= 14) {
  console.log(x);
  console.log("Assez-bien!!!");
} else if (x > 14 && x <= 16) {
  console.log(x);
  console.log("Bien!!!");
} else {
  console.log(x);
  console.log("Très-bien!!!");
}
