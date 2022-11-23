<?php
include("conexion.php");
$id = $_GET["id"];
$simon = "SELECT * FROM simon WHERE id = '$id'";
?>

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
        <h2 class="title">Modificar Simón</h2>
        <form class="simon_form" method="POST" name="simon" id="simon" action="procesoModificarSimon.php" onsubmit="return validated()">
            <?php $resultado = mysqli_query($conexion, $simon);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="font">
                    <label class="id">Código:</label>
                    <input type="number" name="id" id="id" value="<?php echo $row['id']; ?>">
                    <small id="msgId" class="small"></small>
                </div>
                <div class="font font2">
                    <label class="descripcion">Descripción:</label>
                    <input type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion']; ?>">
                    <small id="msgDescripcion" class="small"></small>
                </div>
                <div class="font font3">
                    <label class="estado">Estado:</label>
                    <div class="toggle" id="stateEstado" onclick="Animatedtoggle()">
                        <div class="toggle_button"></div>
                        <input type="hidden" name="estado" id="estado" value="<?php echo $row['estado']; ?>">
                    </div>
                </div>
            <?php
                $estado = $row['estado'];
            }
            mysqli_free_result($resultado); ?>
            <button type="submit" name="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/simon.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/simon.js"></script>
    <?php
    if ($estado == 0) { ?>
        <script>
            Animatedtoggle();
        </script>
    <?php } ?>
</body>

</html>