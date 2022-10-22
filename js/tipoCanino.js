var id = document.getElementById('idTipoCanino')
var descripcion = document.getElementById('descripcion')

function validated() {
    if (id.value != "admin") {
        id.style.border = "1px solid red";
        id_error.style.display = "block";
        id.focus();
        return false;
    }
}