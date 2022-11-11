function validated() {
  var id = document.getElementById("id").value;
  var nombre = document.getElementById("nombre").value;
  var clave = document.getElementById("clave").value;

  var msgId = document.getElementById("msgId");
  var msgNombre = document.getElementById("msgNombre");
  var msgClave = document.getElementById("msgClave");

  let validation = true;
  if (id == null || id.length == 0) {
    msgId.innerHTML = "* La cédula está vacio";
    validation = false;
  }
  if (nombre == null || nombre.length == 0) {
    msgNombre.innerHTML = "* El nombre está vacio";
    validation = false;
  }
  if (clave == null || clave.length == 0) {
    msgClave.innerHTML = "* La clave está vacio";
    validation = false;
  }
  return validation;
}
let toggle = document.querySelector(".toggle");

function Animatedtoggle() {
  toggle.classList.toggle("active");
  var state = (document.getElementById("estado").value = "1");
}
