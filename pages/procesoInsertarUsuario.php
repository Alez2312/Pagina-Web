<?php

$cc = $_POST["cc"];
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$cod_perfil = $_POST["cod_perfil"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

$insertar = "INSERT INTO usuario(cc,nombre,clave,cod_perfil,estado) VALUES ('$cc','$nombre','$clave','$cod_perfil','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:login.php');
