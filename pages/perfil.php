<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de canino</title>
    <link rel="stylesheet" href="../styles/perfil.css">
</head>

<body>
    <div>
        <div>
            <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
            <nav class="nav" id="nav">
                <ul>
                    <li><a href="inicio.php">Inicio</a></li>
                    <li><a href="tipoCanino.php">Tipo de canino</a></li>
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
            <form class="perfil_form" method="post" name="perfil" action="procesoInsertarPerfil.php" onsubmit="return validated()">
                <div class="font">
                    <label class="id">Código de perfil:</label>
                    <input type="number" name="cod_perfil" id="cod_perfil">
                    <small id="msgCod_perfil" class="small"></small>
                </div>
                <div class="font font2">
                    <label class="descripcion">Descripción:</label>
                    <input type="text" name="descripcion" id="descripcion">
                    <small id="msgDescripcion" class="small"></small>
                </div>
                <div class="font font3">
                    <label class="estado">Estado:</label>
                    <div class="toggle" value="0" onclick="Animatedtoggle()">
                        <div class="toggle_button"></div>
                        <input type="hidden" name="estado" id="estado">
                    </div>
                </div>
                <button type="submit">Guardar</button>
                <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/inicio.php'" type="reset">Cancelar</button>
            </form>
        </div>
        <script src="../js/perfil.js"></script>
</body>

</html>