<?php
include('conexion.php');
$perfil = "SELECT * FROM perfil";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="../styles/usuario.css">
</head>

<body>
    <div class="container">
        <h2 class="title">Agregar Usuario</h2>
        <form class="usuario_form" method="post" name="usuario" action="procesoInsertarUsuario.php" onsubmit="return validated()">
            <div class="font">
                <label class="cc">Cédula:</label>
                <input type="number" name="cc" id="cc" required>
                <small id="msgId" class="small"></small>

            </div>
            <div class="font font2">
                <label class="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="font font3">
                <label for="password" class="clave">Clave:</label>
                <input type="password" name="clave" id="clave" required>
                <span class="campo">Mostrar</span>
            </div>
            <div class="font font4">
                <label class="perfil">Perfil:</label>
                <select class="select" name="cod_perfil" id="">

                    <?php $resultado = mysqli_query($conexion, $perfil);

                    while ($row2 = mysqli_fetch_assoc($resultado)) {
                    ?>
                        <option value="<?php echo $row2['cod_perfil'] ?>"><?php echo $row2['descripcion'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="font font5">
                <label class="estado">Estado:</label>
                <div class="toggle" value="0" onclick="Animatedtoggle()">
                    <div class="toggle_button"></div>
                    <input type="hidden" name="estado" id="estado">
                </div>
            </div>
            <button type="submit">Guardar</button>
            <button onclick="location.href='http://localhost/xampp/Pagina-Web/pages/login.php'" type="reset">Cancelar</button>
        </form>
    </div>
    <script src="../js/usuario.js"></script>
</body>

</html>