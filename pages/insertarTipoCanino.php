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
        <h2 class="title">Agregar tipo de canino</h2>
        <form class="tipoCanino_form" method="POST" name="tipoCanino" id="tipoCanino" action="procesoInsertarTipoCanino.php">
        <hr class="hr">
            <?php
            if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?= htmlspecialchars($_GET['error']) ?>
                </p>
            <?php } ?>
            <hr class="hr">
            <div class="font">
                <label class="id">Código:</label>
                <input type="number" name="id" id="id" required>
            </div>
            <div class="font font2">
                <label class="descripcion">Descripción:</label>
                <input type="text" name="descripcion" id="descripcion" required>
            </div>
            <div class="font font3">
                <label class="estado">Estado:</label>
                <div class="toggle" value="1" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                    <input type="hidden" name="estado" id="estado">
                </div>
            </div>
            <button type="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/tipoCanino.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/tipoCanino.js"></script>
</body>

</html>