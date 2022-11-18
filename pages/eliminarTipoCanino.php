<?php
include("conexion.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM tipocanino WHERE id_tipo_canino='$id'";
$eliminar = $conexion->query($eliminar);
header("location:tipoCanino.php");
$conexion->close();