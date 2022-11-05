<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio</title>
    <link rel="stylesheet" href="../styles/insertarRefugio.css">
</head>

<body>
    <div class="container">
        <h2 class="title">Agregar refugio</h2>
        <form class="refugio_form" method="POST" name="refugio" id="refugio" action="procesoInsertarRefugio.php" onsubmit="return validated()">
            <div class="font">
                <label class="id">Código:</label>
                <input type="number" name="id" id="id">
                <small id="msgId" class="small"></small>
            </div>
            <div class="font font2">
                <label class="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre">
                <small id="msgNombre" class="small"></small>
            </div>
            <div class="font font3">
                <label>Dirección:</label>
                <input type="text" name="direccion" id="direccion">
                <small id="msgDireccion" class="small"></small>
            </div>
            <div class="font font4">
                <label class="telefono">Teléfono:</label>
                <input type="text" name="telefono" id="telefono">
                <small id="msgTelefono" class="small"></small>
            </div>
            <div class="font font5">
                <label class="celular">Celular:</label>
                <input type="text" name="celular" id="celular">
                <small id="msgCelular" class="small"></small>
            </div>
            <div class="font font6">
                <label class="estado">Estado:</label>
                <div class="toggle" value="0" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                    <input type="hidden" name="estado" id="estado">
                </div>
            </div>
            <button type="submit" name="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/refugio.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/refugio.js"></script>
</body>

</html>
