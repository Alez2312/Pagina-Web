<?php

$cod_perfil = $_POST["cod_perfil"];
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

$insertar = "INSERT INTO perfil(cod_perfil,descripcion,estado) VALUES ('$cod_perfil','$descripcion','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:inicio.php');
