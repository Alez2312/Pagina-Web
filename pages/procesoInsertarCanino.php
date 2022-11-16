<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$fecha_adopcion_inicial = $_POST["fecha_adopcion_inicial"];
$fecha_adopcion_final = $_POST["fecha_adopcion_final"];
$foto = $_POST["foto"];
$id_tipo_canino = $_POST["id_tipo_canino"];
$id_refugio = $_POST["id_refugio"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

$insertar = "INSERT INTO canino(id, nombre, fecha_adopcion_inicial, fecha_adopcion_final, foto, id_tipo_canino, id_refugio, estado) 
            VALUES ('$id','$nombre', '$fecha_adopcion_inicial', '$fecha_adopcion_final', '$foto', '$id_tipo_canino', '$id_refugio' ,'$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:canino.php');
