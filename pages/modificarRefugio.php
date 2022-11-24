<?php
include("conexion.php");
$id = $_GET["id"];
$refugio = "SELECT * FROM refugio WHERE id_refugio = '$id'";
?>

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
        <h2 class="title">Modificar refugio</h2>
        <form class="refugio_form" method="POST" name="refugio" id="refugio" action="procesoModificarRefugio.php" onsubmit="return validated()">
            <?php $resultado = mysqli_query($conexion, $refugio);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="font">
                    <label class="id">Código:</label>
                    <input type="hidden" name="id" value="<?php echo $row['id_refugio']; ?>"><?php echo $row['id_refugio']; ?>
                </div>
                <div class="font font2">
                    <label class="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>" required>
                </div>
                <div class="font font3">
                    <label>Dirección:</label>
                    <input type="text" name="direccion" id="direccion" value="<?php echo $row['direccion']; ?>" required>
                </div>
                <div class="font font4">
                    <label class="telefono">Teléfono:</label>
                    <input type="number" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>" required><br>
                    <small id="msgTelefono" class="small"></small>
                </div>
                <div class="font font5">
                    <label class="celular">Celular:</label>
                    <input type="number" name="celular" id="celular" value="<?php echo $row['celular']; ?>" required><br>
                    <small id="msgCelular" class="small"></small>
                </div>
                <div class="font font6">
                    <label class="estado">Estado:</label>
                    <div class="toggle" id="stateEstado" onclick="Animatedtoggle()">
                        <div class="toggle_button"></div>
                        <input type="hidden" name="estado" id="estado" value="<?php echo $row['estado_refugio']; ?>">
                    </div>
                </div>
            <?php 
            $estadoRefugio = $row['estado_refugio'];
            }
            mysqli_free_result($resultado); ?>
            <button type="submit" name="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/refugio.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/refugio.js"></script>
    <?php
    if ($estadoRefugio == 0) { ?>
        <script>
            Animatedtoggle();
        </script>
    <?php } ?>
</body>

</html>