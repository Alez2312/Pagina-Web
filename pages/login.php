<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <div class="container">
        <h1 class="label">Compañeros por similitud</h1>
        <hr>
        <?php
        if (isset($_GET['error'])) {
        ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>
            </p>
        <?php
        }
        ?>
        <hr>
        <form class="login_form" action="procesoLogin.php" method="POST" name="form">
            <div class="font">Usuario:</div>
            <input type="text" name="cc" autocomplete="off" placeholder="Ingrese su usuario">

            <div class="font font2">Contraseña</div>
            <input type="password" name="clave" placeholder="Ingrese su clave">

            <button type="submit">Ingresar</button>
            <a href="usuario.php">Registrarse</a>
        </form>
    </div>
</body>

</html>