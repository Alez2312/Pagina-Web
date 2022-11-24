<?php
include("conexion.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM refugio WHERE id_refugio='$id'";
$eliminar = $conexion->query($eliminar);
header("location:refugio.php");
$conexion->close();