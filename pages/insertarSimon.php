<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simón</title>
    <link rel="stylesheet" href="../styles/insertarSimon.css">
</head>

<body>
    <div class="container">
        <h2 class="title">Agregar simón</h2>
        <form class="simon_form" method="post" name="simon" action="procesoInsertarSimon.php" onsubmit="return validated()">
            <div class="font">
                <label class="id">Código:</label>
                <input type="number" name="id" id="id">
                <small id="msgId" class="small"></small>
            </div>
            <div class="font font2">
                <label class="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion">
                <small id="msgDescripcion" class="small"></small>
            </div>
            <div class="font font3">
                <label class="estado">Estado:</label>
                <div class="toggle" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                    <input type="hidden" name="estado" id="estado" value="1">
                </div>
            </div>
            <button type="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/simon.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/simon.js"></script>
</body>

</html>