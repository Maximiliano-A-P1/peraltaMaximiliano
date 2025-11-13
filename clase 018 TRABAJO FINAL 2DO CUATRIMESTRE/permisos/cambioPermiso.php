<?php

session_start();

require_once __DIR__ . '\..\clases\usuarios.php';

if ($_SESSION['admin'] != 1){
    header("Location: ..\index.php");
    exit();
} else {
    $thisUsuario = new Usuario();
    $id_usuario = $_POST['id_usuario'];
    $permiso = $_POST['permiso'];

    $thisUsuario->permisoUsuario($id_usuario, $permiso);

echo '<br><br><a href="administrar.php">Volver</a>';
}


?>