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
    <title>Canino</title>
    <link rel="stylesheet" href="../styles/insertarCanino.css">
</head>

<body>
    <div class="container">
        <h2 class="title">Agregar canino</h2>
        <form class="canino_form" method="POST" name="canino" id="canino" action="procesoInsertarCanino.php" onsubmit="return validated()" enctype="multipart/form-data">
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
                <label class="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="font font3">
                <label class="fecha_adopcion_inicial">Fecha adopción inicial:</label>
                <input type="date" name="fecha_adopcion_inicial" id="fecha_adopcion_inicial" min="<?= date('Y-m-d'); ?>" max="2022-11-30" required>
            </div>
            <div class="font font4">
                <label class="fecha_adopcion_final">Fecha adopción final:</label>
                <input type="date" name="fecha_adopcion_final" id="fecha_adopcion_final"  min="<?= date('Y-m-d'); ?>" max="2022-11-30" required>
            </div>
            <div class="font font5">
                <label class="foto">Foto:</label>
                <input type="file" name="foto" id="foto" required>
            </div>
            <div class="font font6">
                <label class="id_tipo_canino">Tipo canino:</label>
                <select class="select" name="id_tipo_canino" id="id_tipo_canino">

                    <?php $resultado = mysqli_query($conexion, $tipoCanino);

                    while ($row = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <option value="<?php echo $row['id_tipo_canino'] ?>"><?php echo $row['descripcion'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="font font7">
                <label class="id_refugio">Refugio:</label>
                <select class="select" name="id_refugio" id="">

                    <?php $resultado = mysqli_query($conexion, $refugio);

                    while ($row2 = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <option value="<?php echo $row2['id_refugio'] ?>"><?php echo $row2['nombre'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="font font8">
                <label class="estado">Estado:</label>
                <div class="toggle" value="0" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                    <input type="hidden" name="estado" id="estado">
                </div>
            </div>
            <button type="submit" name="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/canino.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/canino.js"></script>
</body>

</html>