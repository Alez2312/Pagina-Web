function validated() {
  var id = document.getElementById("id").value;
  var nombre1 = document.getElementById("nombre1").value;
  var apellido1 = document.getElementById("apellido1").value;
  var celular = document.getElementById("celular").value;
  var direccion = document.getElementById("direccion").value;
  var foto = document.getElementById("foto").value;

  var msgId = document.getElementById("msgId");
  var msgNombre1 = document.getElementById("msgNombre1");
  var msgApellido1 = document.getElementById("msgApellido1");
  var msgCelular = document.getElementById("msgCelular");
  var msgDireccion = document.getElementById("msgDireccion");
  var msgFoto = document.getElementById("msgFoto");

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
  if (nombre1 == null || nombre1.length == 0) {
    msgNombre1.innerHTML = "* El primer nombre está vacio";
    validation = false;
  }
  if (apellido1 == null || apellido1.length == 0) {
    msgApellido1.innerHTML = "* El primer apellido está vacio";
    validation = false;
  }
  if (direccion == null || direccion.length == 0) {
    msgDireccion.innerHTML = "* La dirección está vacio";
    validation = false;
  }
  if (telefono == null || telefono.length == 0) {
    msgTelefono.innerHTML = "* El teléfono está vacio";
    validation = false;
  }
  if (celular == null || celular.length == 0) {
    msgCelular.innerHTML = "* El celular está vacio";
    validation = false;
  }
  if (foto == null || foto.length == 0) {
    msgFoto.innerHTML = "* La foto está vacio";
    validation = false;
  }
  if (validation == true){
    alert(`El adulto mayor ${nombre1} ${apellido1} se registró con éxito`);
  }
  return validation;
}

let toggle = document.querySelector(".toggle");

function Animatedtoggle() {
  toggle.classList.toggle("active");
  var state = (document.getElementById("estado").value = "1");
}
