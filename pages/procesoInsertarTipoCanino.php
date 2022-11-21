<?php

$conexion = mysqli_connect("localhost","root","","companerosporsimilitud");

$id = $_POST["id"];
$_SESSION['id']=$id;
$descripcion = $_POST["descripcion"];
$estado = $_POST["estado"];

if(empty($id)){
    echo('El código es requerido');
    exit();
}
if(empty($descripcion)){
    echo('La descripción es requerido');
    exit();
}

$consulta = "SELECT COUNT(*) AS contar FROM tipocanino WHERE id_tipo_canino = '".$id."'";
$resultadoConsulta = mysqli_query($conexion, $consulta);
$array = mysqli_fetch_array($resultadoConsulta);

if ($array['contar'] > 0) {
    echo "Datos no guardados";
    header('location:insertarTipoCanino.php');
} else {
    $insertar = "INSERT INTO tipocanino(id_tipo_canino,descripcion,estado) VALUES ('$id','$descripcion','$estado')";
    echo "Datos guardados";
}

$conexion->close();
header('location:tipoCanino.php');