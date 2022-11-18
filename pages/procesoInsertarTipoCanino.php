<?php

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost","root","","companerosporsimilitud");

$insertar = "INSERT INTO tipocanino(id_tipo_canino,descripcion,estado) VALUES ('$id','$descripcion','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:tipoCanino.php');