<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$celular = $_POST["celular"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost","root","","companerosporsimilitud");

$consulta = "SELECT id_refugio FROM refugio WHERE id_refugio='$id'";
$resultadoConsulta = mysqli_query($conexion, $consulta);

if(mysqli_num_rows($resultadoConsulta) >0){
    header('location:insertarRefugio.php?error=Código duplicado');
    exit;
}

$insertar = "INSERT INTO refugio(id_refugio,nombre,direccion,telefono,celular,estado_refugio) VALUES ('$id','$nombre','$direccion','$telefono','$celular','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
    header('location:insertarRefugio.php');
}

$conexion->close();
header('location:refugio.php');