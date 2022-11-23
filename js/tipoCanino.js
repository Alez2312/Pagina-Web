

let toggle = document.querySelector(".toggle");

function Animatedtoggle() {
  var togle = toggle.classList.toggle("active");
  if(togle){
    document.getElementById("estado").value = "0";
  }else {
    document.getElementById("estado").value = "1";
  }
}
