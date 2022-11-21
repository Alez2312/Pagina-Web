<?php
include("conexion.php");
$id = $_GET["id"];
$perfil = "SELECT * FROM perfil WHERE cod_perfil = '$id'";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../styles/perfil.css">
</head>

<body>
    <div class="container">
        <h2 class="title">Modificar perfil</h2>
        <form class="perfil_form" method="POST" name="perfil" id="perfil" action="procesoModificarperfil.php" onsubmit="return validated()">
            <?php $resultado = mysqli_query($conexion, $perfil);
            while ($row = mysqli_fetch_assoc($resultado)) { ?>
                <div class="font">
                    <label class="id">Código:</label>
                    <label type="number" name="id" id="id" value=""><?php echo $row['cod_perfil']; ?>
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
            <button onclick="location.href='http://localhost/xampp/Proyectazo/Pagina-Web/pages/perfil.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/perfil.js"></script>
</body>

</html>