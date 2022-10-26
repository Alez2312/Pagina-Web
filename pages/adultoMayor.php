<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio</title>
    <link rel="stylesheet" href="../styles/adultoMayor.css">
</head>

<body>
    <div>
        <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
        <nav class="nav" id="nav">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="tipoCanino.php">Tipo de canino</a></li>
                <li><a href="canino.php">Canino</a></li>
                <li><a href="refugio.php">Refugio</a></li>
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
        <form class="adultoMayor_form" method="post" name="adultoMayor" onsubmit="return validated()">
            <div class="font">
                <label class="id">Cédula:</label>
                <input type="number" name="idAdultoMayor" id="idAdultoMayor">
            </div>
            <div class="font font2">
                <label class="nombre1">Primer nombre:</label>
                <input type="text" name="nombre1" id="nombre1">
            </div>
            <div class="font font3">
                <label class="nombre2">Segundo nombre:</label>
                <input type="text" name="nombre2" id="nombre2">
            </div>
            <div class="font font4">
                <label class="apellido1">Primer apellido:</label>
                <input type="text" name="apellido1" id="apellido1">
            </div>
            <div class="font font5">
                <label class="apellido2">Segundo apellido:</label>
                <input type="text" name="apellido2" id="apellido2">
            </div>
            <div class="font font6">
                <label class="celular">Celular:</label>
                <input type="text" name="celular" id="celular">
            </div>
            <div class="font font7">
                <label class="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion">
            </div>
            <div class="font font8">
                <label class="foto">Foto:</label>
                <input type="text" name="foto" id="foto">
            </div>
            <div class="font font9">
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
    </div>
    <script src="../login.js"></script>
</body>

</html>