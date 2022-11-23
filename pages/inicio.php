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
                        <li><a class="link_a" href="similitud.php">Similitud</a></li>
                        <li><a class="link_a" href="usuario.php">Usuario</a></li>
                        <li><a class="link_a" href="perfil.php">Perfil</a></li>
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
        <img class="image-6" />
        <img class="image-7" />
        <img class="image-8" />
    </div>
    <div class="descripcion">
    <b>Nuestra misión: </b> Maximizar el potencial de nuestros clientes de la tercera edad y encontrar la mejor opción de adoptar un canino. <br><br>
    <b>Nuestros valores: </b> Como empresa e individuos son honestidad, lealtad, respeto, pasión por los desafíos, superación constante y creatividad.<br><br>
    <b>Nuestra visión: </b> Ser una de las mejores empresas de desarrollo web, reconocida por la innovación, simpleza y generación de valor de sus soluciones, con una alta productividad y 
    calidad humana.
    </div>
    </div>
    <script src="../login.js"></script>
</body>

</html>