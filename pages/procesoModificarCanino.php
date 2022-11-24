<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$fecha_adopcion_inicial = $_POST["fecha_adopcion_inicial"];
$fecha_adopcion_final = $_POST["fecha_adopcion_final"];
$foto = $_FILES['foto']['name'];

if ($foto != "") {
    $doc = $nombreusu . "- foto -" . $foto;
    $ruta = $_FILES['foto']['tmp_name'];
    $destino = "foto/" . $doc;
    (copy($ruta, $destino));
}

$id_tipo_canino = $_POST["id_tipo_canino"];
$id_refugio = $_POST["id_refugio"];
$estado = $_POST["estado"];

$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

$actualizar = "UPDATE canino SET nombre_canino='$nombre', fecha_adopcion_inicial='$fecha_adopcion_inicial', fecha_adopcion_final='$fecha_adopcion_final', foto='$foto', 
                        id_tipo_canino='$id_tipo_canino', id_refugio='$id_refugio', estado_canino='$estado' WHERE id_canino='$id'";

$resultado = mysqli_query($conexion, $actualizar);
if ($resultado) {
    echo "Datos guardados";
} else {
    echo "Datos no guardados";
}

$conexion->close();
header('location:canino.php');
