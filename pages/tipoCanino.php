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
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="canino.php">Canino</a></li>
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
    <div class="container">
        <form class="tipoCanino_form" method="post" name="tipoCanino" action="insertTipoCanino.php" onsubmit="return validated()">
            <div class="font">
                <label class="id">Código:</label>
                <input type="number" name="idTipoCanino" id="idTipoCanino">
            </div>
            <div class="font font2">
                <label  >Descripción:</label>
                <input type="text" name="descripcion" id="descripcion">

            </div>
            <div class="font font3">
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
        <div class="table_title">Datos de tipo de canino</div>
        <div class="table_header">Código</div>
        <div class="table_header">Descripción</div>
        <div class="table_header">Estado</div>
        <?php $resultado = mysqli_query($conexion, $tipoCanino);

        while ($row = mysqli_fetch_assoc($resultado)) { ?>
            <div class="table_item"><?php echo $row['id']; ?></div>
            <div class="table_item"><?php echo $row['descripcion']; ?></div>
            <div class="table_item"><?php echo $row['estado']; ?></div>
        <?php }
        mysqli_free_result($resultado); ?>
    </div>
    <script src="../js/tipoCanino.js"></script>
</body>

</html>