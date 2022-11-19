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
    <title>Inicio</title>
    <link rel="stylesheet" href="../styles/form.css">
</head>

<body>
    <div>
        <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
        <nav class="nav" id="nav">
            <ul>
                <li><a class="link_a" href="tipoCanino.php">Tipo de canino</a></li>
                <li><a class="link_a" href="canino.php">Canino</a></li>
                <li><a class="link_a" href="refugio.php">Refugio</a></li>
                <li><a class="link_a" href="adultoMayor.php">Adulto mayor</a></li>
                <li><a class="link_a" href="#">Más</a>
                    <ul>
                        <li><a class="link_a" href="programacion.php">Programación</a></li>
                        <li><a class="link_a" href="usuario.php">Usuario</a></li>
                        <?php
                        $resultado = mysqli_query($conexion, $adultoMayor);
                        if ($row = mysqli_fetch_assoc($resultado)) { ?>
                            <li>
                                <a class="link_a" href="perfilUsuario.php?id=<?php echo $row['id']; ?>">Perfil</a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="images">
        <img class="image-1" />
        <img class="image-2" />
        <img class="image-3" />
        <img class="image-4" />
        <img class="image-5" />
    </div>
    <div class="descripcion">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod reprehenderit doloremque eligendi, magnam,
        nemo
        eius blanditiis vero harum libero obcaecati quis. Obcaecati sint placeat animi, nostrum repudiandae iste
        blanditiis aperiam.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem debitis accusamus nisi unde culpa adipisci
        impedit quas eum nobis qui consectetur recusandae, incidunt dolore ratione maiores? Amet culpa quam rerum?
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod reprehenderit doloremque eligendi, magnam,
        nemo
    </div>
    </div>
    <script src="../login.js"></script>
</body>

</html>