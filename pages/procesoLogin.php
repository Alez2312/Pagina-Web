<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "companerosporsimilitud");

if (isset($_POST['cc']) && isset($_POST['clave'])) {
    $cc = $_POST["cc"];
    $clave = $_POST["clave"];

    if (empty($cc)) {
        header('location:login.php?error=La identifiación es requerido');
        exit();
    } else if (empty($clave)) {
        header("location: login.php?error=La clave es requerida&cc=$cc");
        exit();
    } else {
        $stmt = $conexion->prepare("SELECT * FROM usuario WHERE cc='" . $cc . "' AND clave='" . $clave . "'");
        $stmt->execute([$cc]);
        if ($stmt->num_rows() === 1) {
            $user = $stmt->fetch();

            $user_cc = $user['cc'];
            $user_clave = $user['clave'];

            if ($cc === $user_cc) {
                if ($clave === $user_clave) {
                    $_SESSION['user_cc'] = $user_cc;
                    $_SESSION['user_clave'] = $user_clave;
                    header('location: inicio.php');
                } else {
                    header("location: login.php?error=Identifación o clave incorrecta&cc=$cc");
                }
            } else {
                header("location: login.php?error=Identifación o clave incorrecta&cc=$cc");
            }
        } else {
            header("location: login.php?error=Identifación o clave incorrecta&cc=$cc");
        }
    }
}