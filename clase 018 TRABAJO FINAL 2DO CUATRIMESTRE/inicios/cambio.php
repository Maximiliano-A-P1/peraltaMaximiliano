<?php

require_once __DIR__ . '/../clases/usuarios.php';

session_start();


if (!isset($_SESSION['id_usuario'])){
    header("Location: index.php");
    exit();
}

$id_usuario = $_SESSION['id_usuario'];
$antigua = $_POST['antigua'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($password != $password2) {
    echo 'Las contraseñas no coinciden.';
} else {
    $thisUsuario = new Usuario();
    $thisUsuario->cambiarContraseña($id_usuario, $antigua, $password);
}

echo '<br><a href="..\pagina.php">Volver</a>'

?>