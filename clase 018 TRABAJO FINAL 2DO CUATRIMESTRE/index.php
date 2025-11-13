<?php
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a x</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div>
    <p id="this">Bienvenido a "x"</p>
    <form id="login" method="post" action="inicios/inicio.php">
        <p class="ligado">Nombre de usuario</p>
        <input type="text" name="username" required ></input>
        <p class="ligado">Contraseña</p>
        <input type="password" name="password" required></input>
        <button class="block" type="submit">Ingresar</button>
        <a href="crear.php">
            <p>No posees una cuenta? Cree una</p>
        </a>
    </form>
  </div>
</body>
</html>