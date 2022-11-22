<?php
include("conexion.php");
$id = $_GET["id"];
$adultoMayor = "SELECT * FROM adultomayor WHERE id = '$id'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adulto mayor</title>
    <link rel="stylesheet" href="../styles/modificarAdultoMayor.css">
</head>

<body>
    <div class="container">
        <h2 class="title">Modificar adulto mayor</h2>
        <form class="adultoMayor_form" method="POST" name="adultoMayor" action="procesoModificarAdultoMayor.php" onsubmit="return validated()" enctype="multipart/form-data">
            <?php $resultado = mysqli_query($conexion, $adultoMayor);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="font">
                    <label class="id">Cédula:</label>
                    <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>"><?php echo $row['id']; ?>
                </div>
                <div class="font font2">
                    <label class="nombre1">Primer nombre:</label>
                    <input type="text" name="nombre1" id="nombre1" value="<?php echo $row['nombre1']; ?>" required>
                </div>
                <div class="font font3">
                    <label class="nombre2">Segundo nombre:</label>
                    <input type="text" name="nombre2" id="nombre2" value="<?php echo $row['nombre2']; ?>">
                </div>
                <div class="font font4">
                    <label class="apellido1">Primer apellido:</label>
                    <input type="text" name="apellido1" id="apellido1" value="<?php echo $row['apellido1']; ?>" required>
                </div>
                <div class="font font5">
                    <label class="apellido2">Segundo apellido:</label>
                    <input type="text" name="apellido2" id="apellido2" value="<?php echo $row['apellido2']; ?>">
                </div>
                <div class="font font6">
                    <label class="celular">Celular:</label>
                    <input type="number" name="celular" id="celular" value="<?php echo $row['celular']; ?>" required>
                    <small id="msgCelular" class="small"></small>

                </div>
                <div class="font font7">
                    <label class="direccion">Dirección:</label>
                    <input type="text" name="direccion" id="direccion" value="<?php echo $row['direccion']; ?>" required>
                </div>
                <div class="font font8">
                    <label class="foto">Foto:</label>
                    <div>
                        <img class="imagen" src="../Rostros encontrados/<?php echo $row['foto'] ?>">
                        <input type="file" name="foto" id="foto" value="<?php echo $row['foto']; ?>">
                    </div>
                    <small id="msgFoto" class="small"></small>
                </div>
                <div class="font font9">
                    <label class="estado">Estado:</label>
                    <div class="toggle" value="0" onclick="Animatedtoggle()">
                        <div class="toggle_button"></div>
                        <input type="hidden" name="estado" id="estado">
                    </div>
                </div>
            <?php }
            mysqli_free_result($resultado); ?>
            <button type="submit" name="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/adultoMayor.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/adultoMayor.js"></script>
</body>

</html>