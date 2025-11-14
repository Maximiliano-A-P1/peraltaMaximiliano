<?php
require_once __DIR__ . '/../clases/usuarios.php';


$username = $_POST['username'];
$password = $_POST['password'];

//      cd '.\clase 018\'      
//      cd clase\ 018 

//      php -S localhost:8000

$thisUsuario = new Usuario();
$id = $thisUsuario->iniciarSesion($username,$password);

if ($id > 0) {
    session_start();
    $_SESSION["id_usuario"] = $id;
    $_SESSION["username"] = $username;
    echo '<br><a href="..\pagina.php">Entrar</a>';
    $data = $thisUsuario->getData($id);
    if ($data['permiso'] == 'editor'){
        $_SESSION['permiso'] = $data['permiso'];
        echo '<br><br>';
        echo '<a href="..\permisos\editar.php">Editar</a>';
    }
    if ($data['admin'] == true){
        $_SESSION['admin'] = $data['admin'];
        echo '<br><br>';
        echo '<a href="..\permisos\administrar.php">Administrar</a>';
    }
}


?>
