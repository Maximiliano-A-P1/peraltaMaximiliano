<?php
require_once __DIR__ . '/../clases/usuarios.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($password != $password2) {
    echo 'Las contraseñas no coinciden.';
} else {
    $thisUsuario = new Usuario();
    $thisUsuario->crearCuenta($username, $password);
    echo '<a href="..\index.php">Ir al inicior</a>';
}

?>