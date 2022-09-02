let ordername = document.getElementById("name");
let ordercity = document.getElementById("city");
let orderqty = document.getElementById("quantity");
let orderbtn = document.getElementById("orderbtn");
let home = document.getElementById("home");
let mobile = document.getElementById('mobile');
let team = document.getElementById("team");
let about = document.getElementById("about");

orderbtn.addEventListener("click", () => {
  if (ordername.value == "" || ordercity.value == "" || orderqty.value == "") {
    alert("To order please fill in the field");
  } else {
    alert("Thanks for ordering " + ordername.value);
  }
});

orderqty.addEventListener("keyup", () => {
  if (isNaN(orderqty.value)) {
    orderqty.value = "";
  } 
});

home.addEventListener("click", () => {
  location.reload();
});

order.addEventListener("click", () => {
  window.scrollBy(0, 475);
});

team.addEventListener("click", () => {
  window.scrollBy(0, 995);
});

about.addEventListener("click", () => {
  window.scrollBy(0, 1500);
});
mobile.addEventListener("keyup",()=>{
  if (isNaN(mobile.value)) {
    mobile.value = "";
  } 
})