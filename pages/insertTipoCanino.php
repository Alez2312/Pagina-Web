<?php
include("conexion.php");

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];

$insertar = "INSERT INTO tipocanino (id,descripcion,estado) VALUES ('$id','$descripcion','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "<script>alert('Se ha registrado el tipo de canino con éxito');
    window.location='/xampp/Pagina-Web/pages/tipoCanino.php'</script>";
} else {
    echo "<script>alert('No se pudo registrar el tipo de canino');
    window.history.go(-1);<script>";
}
