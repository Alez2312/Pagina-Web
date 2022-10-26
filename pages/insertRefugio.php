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
header('location:refugio.php');
$conexion->close();