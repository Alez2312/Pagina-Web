<?php
include("conexion.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM simon WHERE id='$id'";
$eliminar = $conexion->query($eliminar);
header("location:simon.php");
$conexion->close();