<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost","root","","companerosporsimilitud");

$actualizar = "UPDATE refugio SET nombre='$nombre', direccion='$direccion', telefono='$telefono', celular='$celular', estado='$estado' WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:refugio.php');