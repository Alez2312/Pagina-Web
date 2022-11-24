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
                <li><a class="link_a" href="tipo_canino.php">Refugio</a></li>
                <li><a class="link_a" href="adultoMayor.php">Adulto mayor</a></li>
                <li><a class="link_a" href="#">Más</a>
                    <ul>
                        <li><a class="link_a" href="similitud.php">Similitud</a></li>
                        <li><a class="link_a" href="usuarioPerfil.php">Usuario</a></li>
                        <li><a class="link_a" href="perfil.php">Perfil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container_table">
        <div class="buscar">
            <input class="buttonsBusqueda" type="submit" value="Agregar" onclick="location.href='http://localhost/xampp/Pagina-Web/pages/insertarTipoCanino.php'">
            <form class="form" method="GET">
                <div>
                    <input class="input_busqueda" type="text" name="busqueda" placeholder="Buscar por descripción">
                    <input class="buttonsBusqueda" type="submit" name="Enviar" value="Buscar">
                    <input class="buttonsBusqueda" type="reset" value="Cancelar" onclick="location.href='http://localhost/xampp/Pagina-Web/pages/tipoCanino.php'">
                </div>
            </form>
        </div>
        <div class="table_title">Datos del tipo de canino</div>
        <div class="table_header">Código</div>
        <div class="table_header">Descripción</div>
        <div class="table_header">Estado</div>
        <div class="table_header">Opciones</div>
        <?php
        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            $consulta = $conexion->query("SELECT * FROM tipocanino WHERE descripcion LIKE '%$busqueda%'");

            while ($row = $consulta->fetch_array()) { ?>
                <div class="table_item"><?php echo $row['id_tipo_canino']; ?></div>
                <div class="table_item"><?php echo $row['descripcion']; ?></div>
                <div class="table_item" name="estado">
                    <?php
                    if ($row['estado'] == 0) { ?>
                        <label>Inactivo</label>
                    <?php
                    } else { ?>
                        <label>Activo</label>
                    <?php } ?>
                </div>
                <div class="table_item">
                    <a class="buttonME" href="modificarTipoCanino.php?id=<?php echo $row['id_tipo_canino']; ?>">Modificar</a> |
                    <a class="buttonME" href="eliminarTipoCanino.php?id=<?php echo $row['id_tipo_canino']; ?>">Eliminar</a>
                </div>
            <?php }
        } else {
            $resultado = mysqli_query($conexion, $tipoCanino);

            while ($row = mysqli_fetch_assoc($resultado)) {
                $consultaValidarTipoCanino = "SELECT * FROM canino WHERE id_tipo_canino = '" . $row['id_tipo_canino'] . "'";
                $resultadoValidarTipoCanino = mysqli_query($conexion, $consultaValidarTipoCanino);
                $numFilas = mysqli_num_rows($resultadoValidarTipoCanino);
            ?>
                <div class="table_item"><?php echo $row['id_tipo_canino']; ?></div>
                <div class="table_item"><?php echo $row['descripcion']; ?></div>
                <div class="table_item" name="estado">
                    <?php
                    if ($row['estado'] == 0) { ?>
                        <label>Inactivo</label>
                    <?php
                    } else { ?>
                        <label>Activo</label>
                    <?php } ?>
                </div>
                <div class="table_item">
                    <a class="buttonME" href="modificarTipoCanino.php?id=<?php echo $row['id_tipo_canino']; ?>">Modificar</a> |
                    <?php
                    if ($numFilas > 0) { ?>
                        <a class="buttonNME">Eliminar</a>
                    <?php } else { ?>
                        <a class="buttonME" href="eliminarTipoCanino.php?id=<?php echo $row['id_tipo_canino']; ?>">Eliminar</a>
                    <?php } ?>
                </div>
        <?php }
        } ?>
    </div>
    <script src="../js/tipoCanino.js"></script>
</body>

</html>