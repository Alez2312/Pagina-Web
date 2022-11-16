<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

$cc = $_POST["cc"];
$clave = $_POST["clave"];

if(empty($cc)){
    header('location:login.php?error=El usuario es requerido');
    exit();
}
if(empty($clave)){
    header('location:login.php?error=La contraseña es requerida');
    exit();
}

$consulta = "SELECT COUNT(*) AS contar FROM usuario WHERE cc='" . $cc . "' AND clave='" . $clave . "'";
$resultado = mysqli_query($conexion, $consulta);
$array = mysqli_fetch_array($resultado);

if ($array['contar'] > 0) {
    header('location:inicio.php');
} else {
    header('location:login.php?error=El usuario o la contraseña son incorrectas');
}

$conexion->close();
