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
                <li><a href="inicio.html">Inicio</a></li>
                <li><a href="canino.html">Canino</a></li>
                <li><a href="refugio.html">Refugio</a></li>
                <li><a href="adultoMayor.html">Adulto mayor</a></li>
                <li><a href="simon.html">Simon</a></li>
                <li><a href="#">Más</a>
                    <ul>
                        <li><a href="monitoreo.html">Monitoreo</a></li>
                        <li><a href="programacion.html">Programación</a></li>
                        <li><a href="usuario.html">Usuario</a></li>
                        <li><a href="perfil.html">Perfil</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
        <div class="container">
            <form class="tipoCanino_form" method="post" name="tipoCanino" onsubmit="return validated()">
                <div class="font">
                    <label class="id">Id:</label>
                    <input type="number" name="idTipoCanino" id="idTipoCanino">
                </div>
                <div class="font font2">
                    <label>Descripción:</label>
                    <input type="text" name="descripcion" id="descripcion">

                </div>
                <div class="font font3">
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
    <script src="../js/tipoCanino.js"></script>
</body>

</html>