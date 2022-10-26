<?php
include("conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$estado = $_POST["estado"];

$insertar = "INSERT INTO refugio (id,nombre,direccion,telefono,celular,estado) VALUES ('$id','$nombre','$direccion','$telefono','$celular','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "<script>alert('Se ha registrado el refugio con éxito');
    window.location='/xampp/Pagina-Web/pages/refugio.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar el refugio');
    window.history.go(-1);<script>";
}