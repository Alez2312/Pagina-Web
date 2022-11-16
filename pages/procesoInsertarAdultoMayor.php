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

$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

$insertar = "INSERT INTO adultomayor(id,nombre1,nombre2,apellido1,apellido2,celular,direccion,foto,estado) VALUES ('$id','$nombre1','$nombre2','$apellido1','$apellido2','$celular','$direccion','$foto','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:adultomayor.php');
