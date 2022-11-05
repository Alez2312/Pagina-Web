<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de canino</title>
    <link rel="stylesheet" href="../styles/insertarTipoCanino.css">
</head>

<body>
    <div class="container">
        <form class="tipoCanino_form" method="post" name="tipoCanino" action="procesoInsertarTipoCanino.php" onsubmit="return validated()">
            <div class="font">
                <label class="id">Código:</label>
                <input type="number" name="id" id="id">
            </div>
            <div class="font font2">
                <label>Descripción:</label>
                <input type="text" name="descripcion" id="descripcion">

            </div>
            <div class="font font3">
                <label class="estado">Estado:</label>
                <div class="toggle" value="0" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                    <input type="hidden" name="estado" id="estado">
                </div>
            </div>
            <button type="submit">Guardar</button>
            <button type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/tipocanino.js"></script>
</body>

</html>