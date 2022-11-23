<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <div class="container">
        <form class="login_form" action="procesoLogin.php" method="POST" name="form">
            <h1 class="title">Compañeros por similitud</h1>
            <img src="../fondos/icono.jpg" class="img">
            <h2 class="h2">Iniciar sesión</h2>
            <hr class="hr">
            <?php
            if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?= htmlspecialchars($_GET['error']) ?>
                </p>
            <?php } ?>
            <hr class="hr">

            <div class="form_div">
                <input class="form_input" type="number" name="cc" autocomplete="off" placeholder=" " required
                value="<?php if(isset($_GET['cc']))echo(htmlspecialchars($_GET['cc'])) ?>">
                <label class="form_label" for="">Número de documento</label>
            </div>

            <div class="form_div">
                <input class="form_input" type="password" name="clave" placeholder=" " required>
                <label class="form_label" for="">Clave</label>
            </div>

            <button class="form_button" type="submit">Ingresar</button>
            <div><b>¿No tienes cuenta?</b></div>
            <a class="form_a" href="usuario.php">Regístrate</a>
        </form>
    </div>
</body>

</html>