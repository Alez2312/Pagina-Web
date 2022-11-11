<?php
include("conexion.php");
$simon = "SELECT * FROM simon";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simón</title>
    <link rel="stylesheet" href="../styles/simon.css">
</head>

<body>
    <div>
        <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
        <nav class="nav" id="nav">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="tipoCanino.php">Tipo de canino</a></li>
                <li><a href="canino.php">Canino</a></li>
                <li><a href="refugio.php">Refugio</a></li>
                <li><a href="adultoMayor.php">Adulto mayor</a></li>
                <li><a href="#">Más</a>
                    <ul>
                        <li><a href="monitoreo.php">Monitoreo</a></li>
                        <li><a href="programacion.php">Programación</a></li>
                        <li><a href="usuario.php">Usuario</a></li>
                        <li><a href="perfil.php">Perfil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    
    <div class="container_table">
        <a class="buttonAgregar" href="insertarSimon.php">Agregar</a>
        <div class="table_title">Datos de Simón</div>
        <div class="table_header">Código</div>
        <div class="table_header">Descripción</div>
        <div class="table_header">Estado</div>
        <div class="table_header">Opciones</div>
        <?php $resultado = mysqli_query($conexion, $simon);

        while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table_item"><?php echo $row['id']; ?></div>
            <div class="table_item"><?php echo $row['descripcion']; ?></div>
            <div class="table_item" name="estado"><?php echo $row['estado']; ?></div>
            <div class="table_item">
                <a class="buttonME" href="modificarSimon.php?id=<?php echo $row['id']; ?>">Modificar</a> |
                <a class="buttonME" href="eliminarSimon.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </div>
        <?php }
        mysqli_free_result($resultado); ?>
    </div>
    <script src="../js/simon.js"></script>
</body>

</html>