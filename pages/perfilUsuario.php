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
    <link rel="stylesheet" href="../styles/perfilUsuario.css">
</head>

<body>
    <div class="container">
        <form class="adultoMayor_form" method="POST" name="adultoMayor" action="procesoModificarAdultoMayor.php" onsubmit="return validated()" enctype="multipart/form-data">
            <?php $resultado = mysqli_query($conexion, $adultoMayor);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="font font8">
                    <img class="imagen" src="../fotos/<?php echo $row['foto'] ?>">
                </div>
                <h2 class="title">
                    <?php echo $row['nombre1']; ?>
                    <?php echo $row['nombre2']; ?>
                    <?php echo $row['apellido1']; ?>
                    <?php echo $row['apellido2']; ?>
                </h2>
                <div class="container_table">
                    <div class="font">
                        <label class="id">Cédula:</label><?php echo $row['id']; ?>
                    </div>
                    <div class="font font2">
                        <label class="celular">Celular:</label><?php echo $row['celular']; ?>
                    </div>
                    <div class="font font3">
                        <label class="direccion">Dirección:</label><?php echo $row['direccion']; ?>
                    </div>
                </div>
            <?php }
            mysqli_free_result($resultado); ?>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/inicio.php'" type="reset">Atras</button>
        </form>
    </div>
    <script src="../js/adultoMayor.js"></script>
</body>

</html>