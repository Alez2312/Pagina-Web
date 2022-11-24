<?php
include("conexion.php");
$adultoMayor = "SELECT * FROM adultomayor";
$canino = "SELECT * FROM canino";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Similitud</title>
    <link rel="stylesheet" href="../styles/similitud.css">
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
                <li><a class="link_a" href="adultoMayor.php">Adulto mayor</a></li>
                <li><a class="link_a" href="#">Más</a>
                    <ul>
                        <li><a class="link_a" href="usuario.php">Usuario</a></li>
                        <li><a class="link_a" href="perfil.php">Perfil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div>
        <h2 class="title">SIMILITUD</h2>
        <form class="container" enctype="multipart/form-data">
            <?php $resultado = mysqli_query($conexion, $adultoMayor);
            if ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div>
                    <div class="imagenes">
                        <img class="adulto" src="../Rostros encontrados/<?php echo $row['foto'] ?>">
                        <label class="nombre"><?php echo $row['nombre1'] ?></label>
                    </div>
                <?php } ?>
                <?php $resultado = mysqli_query($conexion, $canino);
                if ($row = mysqli_fetch_assoc($resultado)) { ?>
                    <div class="imagen1">
                        <img class="canino" src="../caninos/pitbull.jpg">
                        <label class="nombre">Pitbull 85%</label>
                    </div>
                    <div class="imagen2">
                        <img class="canino" src="../caninos/comun1.jpg">
                        <label class="nombre">común 65%</label>
                    </div>
                    <div class="imagen3">
                        <img class="canino" src="../caninos/Pug01.jpg">
                        <label class="nombre">Pug 90%</label>
                    </div>
                    <div class="imagen4">
                        <img class="canino" src="../caninos/dalmata.jpg">
                        <label class="nombre">Dalmata 40%</label>
                    </div>
                </div>
            <?php } ?>
        </form>
    </div>
    <script src="../js/adultoMayor.js"></script>
</body>

</html>