<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de canino</title>
    <link rel="stylesheet" href="../styles/simon.css">
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
            <form class="simon_form" method="post" name="simon" onsubmit="return validated()">
                <div class="font">
                    <label class="id">Código:</label>
                    <input type="number" name="idSimon" id="idSimon">
                </div>
                <div class="font font2">
                    <label class="descripcion">Descripción:</label>
                    <input type="text" name="descripcion" id="descripcion">

                </div>
                <div class="font font3">
                    <label class="ubicacion">Ubicación:</label>
                    <input type="text" name="ubicacion" id="ubicacion">

                </div>
                <div class="font font4">
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
        <script src="../js/simon.js"></script>
</body>

</html>