<?php
include("conexion.php");
$tipoCanino = "SELECT * FROM tipocanino";
$refugio = "SELECT * FROM refugio";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Adulto mayor</title>
    <link rel="stylesheet" href="../styles/insertarAdultoMayor.css">
    <style>
        .datos {
            color: violet;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="title">Agregar adulto mayor</h2>
        <form class="adultoMayor_form" method="POST" name="adultoMayor" action="procesoInsertarAdultoMayor.php" onsubmit="return validated()" enctype="multipart/form-data">
            <hr class="hr">
            <?php
            if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?= htmlspecialchars($_GET['error']) ?>
                </p>
            <?php } ?>
            <hr class="hr">
            <div class="font">
                <label class="id">Cédula:</label>
                <input type="number" name="id" id="cc" required>
            </div>
            <div class="font font2">
                <label class="nombre1">Primer nombre:</label>
                <input type="text" name="nombre1" id="nombre1" required>
            </div>
            <div class="font font3">
                <label class="nombre2">Segundo nombre:</label>
                <input type="text" name="nombre2" id="nombre2">
            </div>
            <div class="font font4">
                <label class="apellido1">Primer apellido:</label>
                <input type="text" name="apellido1" id="apellido1" required>
            </div>
            <div class="font font5">
                <label class="apellido2">Segundo apellido:</label>
                <input type="text" name="apellido2" id="apellido2">
            </div>
            <div class="font font6">
                <label class="celular">Celular:</label>
                <input type="number" name="celular" id="celular" required>
                <small id="msgCelular" class="small"></small>

            </div>
            <div class="font font7">
                <label class="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" required>
            </div>
            <div class="font font8">
                <label class="foto">Foto:</label>
                <input type="file" name="foto" id="foto" required>
            </div>
            <div class="font font9">
                <label class="estado">Estado:</label>
                <div class="toggle" value="0" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                    <input type="hidden" name="estado" id="estado">
                </div>
            </div>
            <button type="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/adultoMayor.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/adultoMayor.js"></script>
</body>

</html>