<?php
include("conexion.php");
$tipoCanino = "SELECT * FROM tipocanino";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de canino</title>
    <link rel="stylesheet" href="../styles/tipoCanino.css">
</head>

<body>
    <div>
        <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
        <nav class="nav" id="nav">
            <ul>
                <li><a class="link_a" href="inicio.php">Inicio</a></li>
                <li><a class="link_a" href="canino.php">Canino</a></li>
                <li><a class="link_a" href="refugio.php">Refugio</a></li>
                <li><a class="link_a" href="adultoMayor.php">Adulto mayor</a></li>
                <li><a class="link_a" href="simon.php">Simon</a></li>
                <li><a class="link_a" href="#">Más</a>
                    <ul>
                        <li><a class="link_a" href="monitoreo.php">Monitoreo</a></li>
                        <li><a class="link_a" href="programacion.php">Programación</a></li>
                        <li><a class="link_a" href="usuario.php">Usuario</a></li>
                        <li><a class="link_a" href="perfil.php">Perfil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container_table">
        <a class="buttonAgregar" href="insertarTipoCanino.php">Agregar</a>
        <div class="table_title">Datos del tipo de canino</div>
        <div class="table_header">Código</div>
        <div class="table_header">Descripción</div>
        <div class="table_header">Estado</div>
        <div class="table_header">Opciones</div>
        <?php $resultado = mysqli_query($conexion, $tipoCanino);

        while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table_item"><?php echo $row['id']; ?></div>
            <div class="table_item"><?php echo $row['descripcion']; ?></div>
            <div class="table_item"><?php echo $row['estado']; ?></div>
            <div class="table_item">
                <a class="buttonME" href="modificarTipoCanino.php?id=<?php echo $row['id']; ?>">Modificar</a> |
                <a class="buttonME" href="eliminarTipoCanino.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </div>
        <?php }
        mysqli_free_result($resultado); ?>
    </div>
    <script src="../js/tipoCanino.js"></script>
</body>

</html>