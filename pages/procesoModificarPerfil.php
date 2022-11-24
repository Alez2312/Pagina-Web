<?php

$id = $_POST["cod_perfil"];
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost","root","","companerosporsimilitud");

$actualizar = "UPDATE perfil SET descripcion='$descripcion', estado='$estado' WHERE cod_perfil ='$id'";

$resultado = mysqli_query($conexion, $actualizar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:perfil.php');