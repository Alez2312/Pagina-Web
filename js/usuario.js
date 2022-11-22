function validated() {
  var id = document.getElementById("id");

  var msgId = document.getElementById("msgId");

  let validation = true;
  if (id.length < 6) {
    msgId.innerHTML = "* La cédula es invalida";
    validation = false;
  }
  return validation;
}
let toggle = document.querySelector(".toggle");

function Animatedtoggle() {
  toggle.classList.toggle("active");
  var state = (document.getElementById("estado").value = "1");
}

document.querySelector('.campo').addEventListener('click', e => {
  const passwordInput = document.querySelector('#clave');
  if (e.target.classList.contains('show')) {
      e.target.classList.remove('show');
      e.target.textContent = 'Ocultar';
      passwordInput.type = 'text';
  } else {
      e.target.classList.add('show');
      e.target.textContent = 'Mostrar';
      passwordInput.type = 'password';
  }
});
