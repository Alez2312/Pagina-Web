<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de canino</title>
    <link rel="stylesheet" href="../styles/usuario.css">
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
            <form class="usuario_form" method="post" name="usuario" onsubmit="return validated()">
                <div class="font">
                    <label class="id">Cédula:</label>
                    <input type="number" name="idUsuario" id="idUsuario">
                </div>
                <div class="font font2">
                    <label class="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                </div>
                <div class="font font3">
                    <label class="clave">Contraseña:</label>
                    <input type="text" name="clave" id="clave">
                </div>
                <div class="font font4">
                    <label class="perfil">Perfil:</label>
                    <input type="text" name="perfil" id="perfil">
                </div>
                <div class="font font5">
                    <label class="estado">Estado:</label>
                    <div class="switch-button">
                        <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
                        <label for="switch-label" class="switch-button__label"></label>
                    </div>
                </div>
                <button type="submit">Guardar</button>
                <button>Buscar</button>
                <button type="submit">Modificar</button>
                <button>Eliminar</button>
                <button type="reset">Cancelar</button>
            </form>
        </div>
        <script src="../js/usuario.js"></script>
</body>

</html>