<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost","root","","companerosporsimilitud");

$insertar = "INSERT INTO refugio(id_refugio,nombre,direccion,telefono,celular,estado_refugio) VALUES ('$id','$nombre','$direccion','$telefono','$celular','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:refugio.php');