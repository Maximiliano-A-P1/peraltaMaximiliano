<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a x</title>
    <link rel="stylesheet" href="css/crear.css">
</head>
<body>
    <p id="barratop">"x" - creacion de cuenta</p>
    <form id="crear" method="post" action="inicios/inicioAlt.php">
        <p class="ligado">Nombre de usuario</p>
        <input type="text" name="username" required></input>
        <p class="ligado">Contraseña</p>
        <input type="password" name="password" required></input>
        <p class="ligado">Repita la contraseña</p>
        <input type="password" name="password2" required></input>
        <button class="block" type="submit">Crear</button>
        <a href="index.php">
            <p>Ya posees una cuenta? Ingresar</p>
        </a>
    </form>
</body>
</html>
