<?php
include("conexion.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM perfil WHERE cod_perfil = '$id'";
$eliminar = $conexion->query($eliminar);
header("location:perfil.php");
$conexion->close();