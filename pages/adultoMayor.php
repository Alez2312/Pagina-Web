<?php
include("conexion.php");
$adultoMayor = "SELECT * FROM adultomayor";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adulto mayor</title>
    <link rel="stylesheet" href="../styles/adultoMayor.css">
</head>

<body>
    <div>
        <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
        <nav class="nav" id="nav">
            <ul>
                <li><a class="link_a" href="inicio.php">Inicio</a></li>
                <li><a class="link_a" href="tipoCanino.php">Tipo de canino</a></li>
                <li><a class="link_a" href="canino.php">Canino</a></li>
                <li><a class="link_a" href="refugio.php">Refugio</a></li>
                <li><a class="link_a" href="#">Más</a>
                    <ul>
                        <li><a class="link_a" href="programacion.php">Programación</a></li>
                        <li><a class="link_a" href="usuario.php">Usuario</a></li>
                        <li><a class="link_a" href="perfil.php">Perfil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container_table">
        <div class="buscar">
            <a class="buttonsBusqueda" href="insertarAdultoMayor.php">Agregar</a>
            <form class="form" method="GET">
                <div>
                    <input class="input_busqueda" type="text" name="busqueda" placeholder="Buscar por cédula">
                    <input class="buttonsBusqueda" type="submit" name="enviar" value="Buscar">
                    <input class="buttonsBusqueda" type="reset" value="cancelar" onclick="location.href='http://localhost/xampp/Pagina-Web/pages/adultoMayor.php'">
                </div>
            </form>
        </div>
        <div class="table_title">Datos del adulto mayor</div>
        <div class="table_header">Cédula</div>
        <div class="table_header">Primer nombre</div>
        <div class="table_header">Segundo nombre</div>
        <div class="table_header">Primer apellido</div>
        <div class="table_header">Segundo apellido</div>
        <div class="table_header">Celular</div>
        <div class="table_header">Dirección</div>
        <div class="table_header">Foto</div>
        <div class="table_header">Estado</div>
        <div class="table_header">Opciones</div>
        <?php
        if (isset($_GET['enviar'])) {
            $busqueda = $_GET['busqueda'];
            $consulta = $conexion->query("SELECT * FROM adultomayor WHERE id LIKE '%$busqueda%'");

            while ($row = $consulta->fetch_array()) { ?>
                <div class="table_item"><?php echo $row['id']; ?></div>
                <div class="table_item"><?php echo $row['nombre1']; ?></div>
                <div class="table_item"><?php echo $row['nombre2']; ?></div>
                <div class="table_item"><?php echo $row['apellido1']; ?></div>
                <div class="table_item"><?php echo $row['apellido2']; ?></div>
                <div class="table_item"><?php echo $row['celular']; ?></div>
                <div class="table_item"><?php echo $row['direccion']; ?></div>
                <div class="table_item"><?php echo $row['foto']; ?></div>
                <div class="table_item" name="estado">
                    <?php
                    if ($row['estado'] == 1) { ?>
                        <label>Inactivo</label>
                    <?php
                    } else { ?>
                        <label>Activo</label>
                    <?php } ?>
                </div>
                <div class="table_item">
                    <a class="buttonME" href="modificarAdultoMayor.php?id=<?php echo $row['id']; ?>">Modificar</a> |
                    <a class="buttonME" href="eliminarAdultoMayor.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                </div>
            <?php  }
        } else {
            $resultado = mysqli_query($conexion, $adultoMayor);

            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="table_item"><?php echo $row['id']; ?></div>
                <div class="table_item"><?php echo $row['nombre1']; ?></div>
                <div class="table_item"><?php echo $row['nombre2']; ?></div>
                <div class="table_item"><?php echo $row['apellido1']; ?></div>
                <div class="table_item"><?php echo $row['apellido2']; ?></div>
                <div class="table_item"><?php echo $row['celular']; ?></div>
                <div class="table_item"><?php echo $row['direccion']; ?></div>
                <div class="table_item"><?php echo $row['foto']; ?></div>
                <div class="table_item" name="estado">
                    <?php
                    if ($row['estado'] == 1) { ?>
                        <label>Inactivo</label>
                    <?php
                    } else { ?>
                        <label>Activo</label>
                    <?php } ?>
                </div>
                <div class="table_item">
                    <a class="buttonME" href="modificarAdultoMayor.php?id=<?php echo $row['id']; ?>">Modificar</a> |
                    <a class="buttonME" href="eliminarAdultoMayor.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                </div>
        <?php }
        } ?>
    </div>
    <script src="../js/adultoMayor.js"></script>
</body>

</html>