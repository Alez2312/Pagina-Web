<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio</title>
    <link rel="stylesheet" href="../styles/canino.css">
</head>

<body>
    <div>
        <h1 class="title">COMPAÑEROS POR SIMILITUD</h1>
        <nav class="nav" id="nav">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="tipoCanino.php">Tipo de canino</a></li>
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
        <form class="canino_form" method="post" name="canino" onsubmit="return validated()">
            <div class="font">
                <label class="id">Código:</label>
                <input type="number" name="idCanino" id="idCanino">
            </div>
            <div class="font font2">
                <label class="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div class="font font3">
                <label>Fecha adopción:</label>
                <input type="date" name="fecha_adopcion" id="fecha_adopcion">
            </div>
            <div class="font font4">
                <label class="rastreador">Rastreador:</label>
                <input type="text" name="rastreador" id="rastreador">
            </div>
            <div class="font font5">
                <label class="carnet">Carnet:</label>
                <input type="text" name="carnet" id="carnet">
            </div>
            <div class="font font6">
                <label class="foto">Foto:</label>
                <input type="text" name="foto" id="foto">
            </div>
            <div class="font font7">
                <label class="id_tipoCanino">Tipo canino:</label>
                <input type="text" name="id_tipoCanino" id="id_tipoCanino">
            </div>
            <div class="font font8">
                <label class="refugio">Refugio:</label>
                <input type="text" name="refugio" id="refugio">
            </div>
            <div class="font font9">
            <label class="estado">Estado:</label>
                <div class="toggle" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                </div>
            </div>
            <button type="submit">Guardar</button>
            <button>Buscar</button>
            <button type="submit">Modificar</button>
            <button>Eliminar</button>
            <button type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../login.js"></script>
</body>

</html>