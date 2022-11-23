function validated() {
  var cod_perfil = document.getElementById("cod_perfil").value;
  var descripcion = document.getElementById("descripcion").value;

  var msgCod_perfil = document.getElementById("msgCod_perfil");
  var msgDescripcion = document.getElementById("msgDescripcion");

  let validation = true;
  if (cod_perfil == null || cod_perfil.length == 0) {
    msgCod_perfil.innerHTML = "* La cédula está vacio";
    validation = false;
  }
  if (descripcion == null || descripcion.length == 0) {
    msgDescripcion.innerHTML = "* La descripción está vacio";
    validation = false;
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
