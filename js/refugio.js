var refugio = document.getElementById("refugio");
var id = document.getElementById("id").value;
var nombre = document.getElementById("nombre").value;
var direccion = document.getElementById("direccion").value;
var telefono = document.getElementById("telefono").value;
var celular = document.getElementById("celular").value;

const expresiones = {
  expCelular: /^\d{10}$/,
  expTelefono: /^\d{3}\s\d{7}$/,
}

refugio.addEventListener('submit', (e) => {
})

function validated() {
  if (id == null || id.length == 0) {
    alert("[ERROR] Código no valido");
    return false;
  } else if (nombre == null || nombre.length == 0) {
    alert("[ERROR] Nombre no valido");
    return false;
  } else if (direccion == null || direccion.length == 0) {
    alert("[ERROR] Dirección no valido");
    return false;
  }else if (telefono == null || telefono.length == 0) {
    alert("[ERROR] Teléfono no valido");
    return false;
  }else if (celular == null ||celular.length == 0) {
    alert("[ERROR] Celular no valido");
    return false;
  }
  return true
}

let toggle = document.querySelector(".toggle");

function Animatedtoggle() {
  toggle.classList.toggle("active");
  var state = (document.getElementById("estado").value = "1");
}
