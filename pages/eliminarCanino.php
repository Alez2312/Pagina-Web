<?php
include("conexion.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM canino WHERE id_canino='$id'";
$eliminar = $conexion->query($eliminar);
header("location:canino.php");
$conexion->close();