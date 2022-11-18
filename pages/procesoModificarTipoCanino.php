<?php

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost","root","","companerosporsimilitud");

$actualizar = "UPDATE tipocanino SET descripcion='$descripcion', estado='$estado' WHERE id_tipo_canino ='$id'";

$resultado = mysqli_query($conexion, $actualizar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:tipoCanino.php');