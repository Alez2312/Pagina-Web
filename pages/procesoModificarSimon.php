<?php

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost", "root", "", "compañerosporsimilitud");

$actualizar = "UPDATE simon SET descripcion='$descripcion', estado='$estado' WHERE id='$id'";

$resultado = mysqli_query($conexion, $actualizar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:simon.php');
