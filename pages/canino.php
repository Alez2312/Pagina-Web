<?php
include("conexion.php");
$canino = "SELECT * FROM canino";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canino</title>
    <link rel="stylesheet" href="../styles/canino.css">
</head>

<body>
    <div>
        <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
        <nav class="nav" id="nav">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="tipoCanino.php">Tipo de canino</a></li>
                <li><a href="refugio.php">Refugio</a></li>
                <li><a href="adultoMayor.php">Adulto mayor</a></li>
                <li><a href="simon.php">Simon</a></li>
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
        <a class="buttonAgregar" href="insertarCanino.php">Agregar</a>
        <div class="table_title">Datos del canino</div>
        <div class="table_header">Código</div>
        <div class="table_header">Nombre</div>
        <div class="table_header">Fecha de adopción inicial</div>
        <div class="table_header">Fecha de adopción final</div>
        <div class="table_header">Foto</div>
        <div class="table_header">Tipo de canino</div>
        <div class="table_header">Refugio</div>
        <div class="table_header">Estado</div>
        <div class="table_header">Opciones</div>
        <?php $resultado = mysqli_query($conexion, $canino);

        while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table_item"><?php echo $row['id']; ?></div>
            <div class="table_item"><?php echo $row['nombre']; ?></div>
            <div class="table_item"><?php echo $row['fecha_adopcion_inicial']; ?></div>
            <div class="table_item"><?php echo $row['fecha_adopcion_final']; ?></div>
            <div class="table_item"><?php echo $row['foto']; ?></div>
            <div class="table_item"><?php echo $row['id_tipo_canino']; ?></div>
            <div class="table_item"><?php echo $row['id_refugio']; ?></div>
            <div class="table_item" name="estado"><?php echo $row['estado']; ?></div>
            <div class="table_item">
                <a class="buttonME" href="modificarCanino.php?id=<?php echo $row['id']; ?>">Modificar</a> |
                <a class="buttonME" href="eliminarCanino.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </div>
        <?php }
        mysqli_free_result($resultado); ?>
    </div>
    <script src="../js/canino.js"></script>
</body>

</html>