<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

if (isset($_POST['cc']) && isset($_POST['clave'])) {
    $cc = $_POST["cc"];
    $clave = $_POST["clave"];

    $consulta = "SELECT * FROM usuario WHERE cc='$cc' AND clave='$clave'";

    $resultado = mysqli_query($conexion, $consulta);
    if(mysqli_num_rows($resultado) >0){
        header('location:inicio.php');
        exit;
    }else{
        header('location:login.php?error=Identificación o clave incorrecta');
    }
}