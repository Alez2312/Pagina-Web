<?php
include("conexion.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM canino WHERE id='$id'";
$eliminar = $conexion->query($eliminar);
header("location:canino.php");
$conexion->close();