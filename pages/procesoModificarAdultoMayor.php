<?php

$id = $_POST["id"];
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$celular = $_POST["celular"];
$direccion = $_POST["direccion"];
$foto = $_POST["foto"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost", "root", "", "compañerosporsimilitud");

$actualizar = "UPDATE adultomayor SET nombre1='$nombre1', nombre2='$nombre2', apellido1='$apellido1', apellido2='$apellido2', celular='$celular', direccion='$direccion', foto='$foto', estado='$estado' WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:adultoMayor.php');