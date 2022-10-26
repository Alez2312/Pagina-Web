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
    <div class="container">
        <form class="refugio_form" method="POST" name="refugio" action="insertRefugio.php" onsubmit="return validated()">
            <div class="font">
                <label class="id">Código:</label>
                <input type="number" name="id" id="id">
            </div>
            <div class="font font2">
                <label class="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="font font3">
                <label>Dirección:</label>
                <input type="text" name="direccion" id="direccion">
            </div>
            <div class="font font4">
                <label class="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono">
            </div>
            <div class="font font5">
                <label class="celular">Celular:</label>
                <input type="text" name="celular" id="celular">
            </div>
            <div class="font font6">
                <label class="estado">Estado:</label>
                <div class="toggle" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                </div>
            </div>
            <button type="submit">Guardar</button>
            <button>Buscar</button>
            <button type="submit">Modificar</button>
            <button>Eliminar</button>
            <button type="reset">Cancelar</button>
        </form>
    </div>
    <div class="container_table">
        <div class="table_title">Datos de refugio</div>
        <div class="table_header">Código</div>
        <div class="table_header">Nombre</div>
        <div class="table_header">Dirección</div>
        <div class="table_header">Teléfono</div>
        <div class="table_header">Celular</div>
        <div class="table_header">Estado</div>
        <?php $resultado = mysqli_query($conexion, $refugio);

        while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table_item"><?php echo $row['id']; ?></div>
            <div class="table_item"><?php echo $row['nombre']; ?></div>
            <div class="table_item"><?php echo $row['direccion']; ?></div>
            <div class="table_item"><?php echo $row['telefono']; ?></div>
            <div class="table_item"><?php echo $row['celular']; ?></div>
            <div class="table_item"><?php echo $row['estado']; ?></div>
        <?php }
        mysqli_free_result($resultado); ?>
    </div>
    <script src="../js/refugio.js"></script>
</body>

</html>