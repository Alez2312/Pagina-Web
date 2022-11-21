<?php

$id = $_POST["id"];
$nombre1 = $_POST["nombre1"];
$nombre2 = $_POST["nombre2"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$celular = $_POST["celular"];
$direccion = $_POST["direccion"];
$foto = $_FILES['foto']['name'];

if ($foto != "") {
    $doc = $nombreusu . "- foto -" . $foto;
    $ruta = $_FILES['foto']['tmp_name'];
    $destino = "foto/" . $doc;
    (copy($ruta, $destino));
}
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

$consulta = "SELECT id FROM adultomayor WHERE id='$id'";
$resultadoConsulta = mysqli_query($conexion, $consulta);

if(mysqli_num_rows($resultadoConsulta) >0){
    header('location:insertarAdultoMayor.php?error=cédula duplicada');
    exit;
}

$insertar = "INSERT INTO adultomayor(id,nombre1,nombre2,apellido1,apellido2,celular,direccion,foto,estado) VALUES ('$id','$nombre1','$nombre2','$apellido1','$apellido2','$celular','$direccion','$foto','$estado')";
$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:adultomayor.php');
