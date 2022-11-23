<?php
include("conexion.php");
$canino = "SELECT *, tipocanino.descripcion, refugio.nombre 
FROM canino 
INNER JOIN tipocanino ON canino.id_tipo_canino=tipocanino.id_tipo_canino
INNER JOIN refugio ON canino.id_refugio=refugio.id_refugio";
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
                <li><a class="link_a" href="inicio.php">Inicio</a></li>
                <li><a class="link_a" href="tipoCanino.php">Tipo de canino</a></li>
                <li><a class="link_a" href="refugio.php">Refugio</a></li>
                <li><a class="link_a" href="adultoMayor.php">Adulto mayor</a></li>
                <li><a class="link_a" href="#">Más</a>
                    <ul>
                        <li><a class="link_a" href="similitud.php">Similitud</a></li>
                        <li><a class="link_a" href="usuario.php">Usuario</a></li>
                        <li><a class="link_a" href="perfil.php">Perfil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container_table">
        <div class="buscar">
            <input class="buttonsBusqueda" type="reset" value="Agregar" onclick="location.href='http://localhost/xampp/Pagina-Web/pages/insertarCanino.php'">
            <form class="form" action="" method="GET">
                <input class="input_busqueda" type="text" name="busqueda" placeholder="Buscar por nombre">
                <input class="buttonsBusqueda" type="submit" name="enviar" value="Buscar">
                <input class="buttonsBusqueda" type="reset" value="Cancelar" onclick="location.href='http://localhost/xampp/Pagina-Web/pages/canino.php'">
            </form>
        </div>
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
        <?php
        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            $consulta = $conexion->query("SELECT * FROM canino WHERE nombre_canino LIKE '%$busqueda%'");

            while ($row = $consulta->fetch_array()) { ?>
                <div class="table_item"><?php echo $row['id_canino']; ?></div>
                <div class="table_item"><?php echo $row['nombre_canino']; ?></div>
                <div class="table_item"><?php echo $row['fecha_adopcion_inicial']; ?></div>
                <div class="table_item"><?php echo $row['fecha_adopcion_final']; ?></div>
                <div class="table_item"><?php echo $row['foto']; ?></div>
                <div class="table_item"><?php echo $row['id_tipo_canino']; ?></div>
                <div class="table_item"><?php echo $row['id_refugio']; ?></div>
                <div class="table_item" name="estado">
                    <?php
                    if ($row['estado_canino'] == 1) { ?>
                        <label>Inactivo</label>
                    <?php
                    } else { ?>
                        <label>Activo</label>
                    <?php } ?>
                </div>
                <div class="table_item">
                    <a class="buttonME" href="modificarCanino.php?id=<?php echo $row['id_canino']; ?>">Modificar</a> |
                    <a class="buttonME" href="eliminarCanino.php?id=<?php echo $row['id_canino']; ?>">Eliminar</a>
                </div>
            <?php }
        } else {
            $resultado = mysqli_query($conexion, $canino);

            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="table_item"><?php echo $row['id_canino']; ?></div>
                <div class="table_item"><?php echo $row['nombre_canino']; ?></div>
                <div class="table_item"><?php echo $row['fecha_adopcion_inicial']; ?></div>
                <div class="table_item"><?php echo $row['fecha_adopcion_final']; ?></div>
                <div class="table_item"><?php echo $row['foto']; ?></div>
                <div class="table_item"><?php echo $row['descripcion']; ?></div>
                <div class="table_item"><?php echo $row['nombre']; ?></div>
                <div class="table_item" name="estado">
                    <?php
                    if ($row['estado_canino'] == 0) { ?>
                        <label>Inactivo</label>
                    <?php
                    } else { ?>
                        <label>Activo</label>
                    <?php } ?>
                </div>
                <div class="table_item">
                    <a class="buttonME" href="modificarCanino.php?id=<?php echo $row['id_canino']; ?>">Modificar</a> |
                    <a class="buttonME" href="eliminarCanino.php?id=<?php echo $row['id_canino']; ?>">Eliminar</a>
                </div>
        <?php }
        } ?>
    </div>
    <script src="../js/canino.js"></script>
</body>

</html>