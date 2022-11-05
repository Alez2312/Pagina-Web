<?php
include("conexion.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM tipocanino WHERE id='$id'";
$eliminar = $conexion->query($eliminar);
header("location:tipoCanino.php");
$conexion->close();