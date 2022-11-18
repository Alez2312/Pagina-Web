<?php
include("conexion.php");
$id = $_GET["id"];
$tipocanino = "SELECT * FROM tipocanino WHERE id_tipo_canino = '$id'";
?>

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
        <h2 class="title">Modificar tipo de canino</h2>
        <form class="tipoCanino_form" method="POST" name="tipoCanino" id="tipoCanino" action="procesoModificarTipoCanino.php" onsubmit="return validated()">
            <?php $resultado = mysqli_query($conexion, $tipocanino);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="font">
                    <label class="id">Código:</label>
                    <input type="number" name="id" id="id" value="<?php echo $row['id_tipo_canino']; ?>">
                    <small id="msgId" class="small"></small>
                </div>
                <div class="font font2">
                    <label class="descripcion">Descripción:</label>
                    <input type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion']; ?>">
                    <small id="msgDescripcion" class="small"></small>
                </div>
                <div class="font font3">
                    <label class="estado">Estado:</label>
                    <div class="toggle" value="<?php echo $row['estado']; ?>" onclick="Animatedtoggle()">
                        <div class="toggle_button"></div>
                        <input type="hidden" name="estado" id="estado">
                    </div>
                </div>
            <?php }
            mysqli_free_result($resultado); ?>
            <button type="submit" name="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/tipoCanino.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/tipoCanino.js"></script>
</body>

</html>