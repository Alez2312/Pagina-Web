<?php
include("conexion.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM adultomayor WHERE id='$id'";
$eliminar = $conexion->query($eliminar);
header("location:adultomayor.php");
$conexion->close();