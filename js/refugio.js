function validated() {
  var id = document.getElementById("id").value;
  var nombre = document.getElementById("nombre").value;
  var direccion = document.getElementById("direccion").value;
  var telefono = document.getElementById("telefono").value;
  var celular = document.getElementById("celular").value;

  var msgId = document.getElementById("msgId");
  var msgNombre = document.getElementById("msgNombre");
  var msgDireccion = document.getElementById("msgDireccion");
  var msgTelefono = document.getElementById("msgTelefono");
  var msgCelular = document.getElementById("msgCelular");

  var expTelefono = /^\d{3}\s\d{7}$/;
  var expCelular = /^\d{10}$/;

  let responseValid = false;
  let validation = true;
  let msg = document.querySelectorAll('small[id^="msg"]');
  let counter = 0;

  if (id == null || id.length == 0) {
    msgId.innerHTML = "* El código está vacio";
    validation = false;
  }
  if (nombre == null || nombre.length == 0) {
    msgNombre.innerHTML = "* El nombre está vacio";
    validation = false;
  }
  if (direccion == null || direccion.length == 0) {
    msgDireccion.innerHTML = "* La dirección está vacio";
    validation = false;
  }
  if (telefono == null || telefono.length < 10) {
    msgTelefono.innerHTML = "* Teléfono invalido";
    validation = false;
  }
  if (celular == null || celular.length < 10) {
    msgCelular.innerHTML = "* Celular invalido";
    validation = false;
  }
  if (validation == true){
    alert(`EL refugio ${nombre} se registró con éxito`);
  }
  return validation;
}

let toggle = document.querySelector(".toggle");

function Animatedtoggle() {
  toggle.classList.toggle("active");
  var state = (document.getElementById("estado").value = "1");
}
