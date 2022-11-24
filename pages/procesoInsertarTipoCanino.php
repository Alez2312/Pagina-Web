<?php

$id = $_POST["id"];
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost","root","","companerosporsimilitud");

$consulta = "SELECT id_tipo_canino FROM tipocanino WHERE id_tipo_canino = '".$id."'";
$resultadoConsulta = mysqli_query($conexion, $consulta);

if(mysqli_num_rows($resultadoConsulta) >0){
    header('location:insertarTipoCanino.php?error=Código duplicado');
    exit;
}
$insertar = "INSERT INTO tipocanino(id_tipo_canino,descripcion,estado) VALUES ('$id','$descripcion','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos no guardados";
} else {
    echo "Datos guardados";
    header('location:insertarTipoCanino.php');
}

$conexion->close();
header('location:tipoCanino.php');