<?php

session_start();

if (!isset($_SESSION['id_usuario'])){
    header("Location: index.php");
    exit();
}

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a x</title>
    <link rel="stylesheet" href="css/cambiar.css">
</head>
<body>
    <p id="this">Recuerde que los empleados de x jamas solicitaran su contraseña. Ya la sabemos :)<p>
        <form id="cambiar" method="post" action="inicios/cambio.php">
        <p class="ligado">Contraseña Antigua</p>
        <input type="text" name="antigua" required></input>
        <p class="ligado">Contraseña Nueva</p>
        <input type="password" name="password" required></input>
        <p class="ligado">Repita la contraseña</p>
        <input type="password" name="password2" required></input>
        <button class="block" type="submit">Cambiar</button>
    </form>
</body>
</html>