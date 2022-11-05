<?php
include("conexion.php");
$refugio = "SELECT * FROM refugio";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio</title>
    <link rel="stylesheet" href="../styles/refugio.css">
</head>

<body>
    <div>
        <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
        <nav class="nav" id="nav">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="tipoCanino.php">Tipo de canino</a></li>
                <li><a href="canino.php">Canino</a></li>
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
        <a class="buttonAgregar" href="insertarRefugio.php">Agregar</a>
        <div class="table_title">Datos de refugio</div>
        <div class="table_header">Código</div>
        <div class="table_header">Nombre</div>
        <div class="table_header">Dirección</div>
        <div class="table_header">Teléfono</div>
        <div class="table_header">Celular</div>
        <div class="table_header">Estado</div>
        <div class="table_header">Opciones</div>
        <?php $resultado = mysqli_query($conexion, $refugio);

        while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table_item"><?php echo $row['id']; ?></div>
            <div class="table_item"><?php echo $row['nombre']; ?></div>
            <div class="table_item"><?php echo $row['direccion']; ?></div>
            <div class="table_item"><?php echo $row['telefono']; ?></div>
            <div class="table_item"><?php echo $row['celular']; ?></div>
            <div class="table_item" name="estado"><?php echo $row['estado']; ?></div>
            <div class="table_item">
                <a class="buttonME" href="modificarRefugio.php?id=<?php echo $row['id']; ?>">Modificar</a> |
                <a class="buttonME" href="eliminarRefugio.php?id=<?php echo $row['id']; ?>">Eliminar</a>
            </div>
        <?php }
        mysqli_free_result($resultado); ?>
    </div>
    <script src="../js/refugio.js"></script>
</body>

</html>