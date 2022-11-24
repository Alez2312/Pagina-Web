function validated() {
  var id = document.getElementById("id").value;
  var descripcion = document.getElementById("descripcion").value;

  var msgId = document.getElementById("msgId");
  var msgDescripcion = document.getElementById("msgDescripcion");

  let responseValid = false;
  let validation = true;
  let msg = document.querySelectorAll('small[id^="msg"]');
  let counter = 0;

  if (id == null || id.length == 0) {
    msgId.innerHTML = "* El código está vacio";
    validation = false;
  }
  if (descripcion == null || descripcion.length == 0) {
    msgDescripcion.innerHTML = "* La descripción está vacio";
    validation = false;
  }
  if (validation == true){
    alert(`El simón ${descripcion} se registró con éxito`);
  }
  return validation;
}

let toggle = document.querySelector(".toggle");

function Animatedtoggle() {
  var togle = toggle.classList.toggle("active");
  if(togle){
    document.getElementById("estado").value = "0";
  }else {
    document.getElementById("estado").value = "1";
  }
}
