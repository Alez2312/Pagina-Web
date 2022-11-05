function validated() {
  var id = document.getElementById("id").value;
  var nombre = document.getElementById("nombre").value;
  var fecha_adopcion_inicial = document.getElementById("fecha_adopcion_inicial").value;
  var fecha_adopcion_final = document.getElementById("fecha_adopcion_final").value;
  var latitud = document.getElementById("latitud").value;
  var longitud = document.getElementById("longitud").value;
  var carnet = document.getElementById("carnet").value;
  var foto = document.getElementById("foto").value;
  var id_tipo_canino = document.getElementById("id_tipo_canino").value;
  var id_refugio = document.getElementById("id_refugio").value;

  var msgId = document.getElementById("msgId");
  var msgNombre = document.getElementById("msgNombre");
  var msgFecha_adopcion_inicial = document.getElementById("msgFecha_adopcion_inicial");
  var msgFecha_adopcion_final = document.getElementById("msgFecha_adopcion_final");
  var msgLatitud = document.getElementById("msgLatitud");
  var msgLongitud = document.getElementById("msgLongitud");
  var msgCarnet = document.getElementById("msgCarnet");
  var msgFoto = document.getElementById("msgFoto");
  var msgId_tipo_canino = document.getElementById("msgId_tipo_canino");
  var msgId_refugio = document.getElementById("msgId_refugio");

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
  if (fecha_adopcion_inicial == null || fecha_adopcion_inicial.length == 0) {
    msgFecha_adopcion_inicial.innerHTML =
      "* La fecha inicial de adopción está vacio";
    validation = false;
  }
  if (fecha_adopcion_final == null || fecha_adopcion_final.length == 0) {
    msgFecha_adopcion_final.innerHTML =
      "* La fecha final de adopción está vacio";
    validation = false;
  }
  if (latitud == null || latitud.length == 0) {
    msgLatitud.innerHTML = "* La latitud está vacio";
    validation = false;
  }
  if (longitud == null || longitud.length == 0) {
    msgLongitud.innerHTML = "* La Longitud está vacio";
    validation = false;
  }
  if (carnet == null || carnet.length == 0) {
    msgCarnet.innerHTML = "* El carnet está vacio";
    validation = false;
  }
  
  if (foto == null || foto.length == 0) {
    msgFoto.innerHTML = "* El foto está vacio";
    validation = false;
  }
  if (id_tipo_canino == null || id_tipo_canino.length == 0) {
    msgId_tipo_canino.innerHTML = "* El código del tipo de canino está vacio";
    validation = false;
  }
  if (id_refugio == null || id_refugio.length == 0) {
    msgId_refugio.innerHTML = "* El código del refugio está vacio";
    validation = false;
  }
  if (validation == true) {
    alert(`EL canino ${nombre} se registró con éxito`);
  }
  return validation;
}

let toggle = document.querySelector(".toggle");

function Animatedtoggle() {
  toggle.classList.toggle("active");
  var state = (document.getElementById("estado").value = "1");
}
