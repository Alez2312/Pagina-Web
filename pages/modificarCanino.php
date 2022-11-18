<?php
include("conexion.php");
$id = $_GET["id"];
$canino = "SELECT * FROM canino WHERE id_canino = '$id'";
$tipoCanino = "SELECT * FROM tipocanino";
$refugio = "SELECT * FROM refugio";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canino</title>
    <link rel="stylesheet" href="../styles/insertarCanino.css">
</head>

<body>
    <div class="container">
        <h2 class="title">Modificar canino</h2>
        <form class="canino_form" method="POST" name="canino" id="canino" action="procesoModificarCanino.php" onsubmit="return validated()" enctype="multipart/form-data">
            <?php $resultado = mysqli_query($conexion, $canino);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="font">
                    <label class="id">Código:</label>
                    <input type="number" name="id" id="id" value="<?php echo $row['id_canino']; ?>">
                    <small id="msgId" class="small"></small>
                </div>
                <div class="font font2">
                    <label class="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre_canino']; ?>">
                    <small id="msgNombre" class="small"></small>
                </div>
                <div class="font font3">
                    <label class="fecha_adopcion_inicial">Fecha adopción inicial:</label>
                    <input type="text" name="fecha_adopcion_inicial" id="fecha_adopcion_inicial" value="<?php echo $row['fecha_adopcion_inicial']; ?>">
                    <small id="msgFecha_adopcion_inicial" class="small"></small>
                </div>
                <div class="font font4">
                    <label class="fecha_adopcion_final">Fecha adopción final:</label>
                    <input type="text" name="fecha_adopcion_final" id="fecha_adopcion_final" value="<?php echo $row['fecha_adopcion_final']; ?>">
                    <small id="msgFecha_adopcion_final" class="small"></small>
                </div>
                <div class="font font5">
                    <label class="foto">Foto:</label>
                    <input type="file" name="foto" id="foto" value="<?php echo $row['foto']; ?>">
                    <small id="msgFoto" class="small"></small>
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
            <?php }
            mysqli_free_result($resultado); ?>
            <button type="submit" name="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/canino.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/canino.js"></script>
</body>

</html>