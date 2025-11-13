<?php
require_once "dataBase.php";
class Usuario {
private $db;
public function __construct() {
$this->db = (new Database())->connect();
}

public function crearCuenta($username, $password) {
   $verificar = $this->db->prepare("SELECT COUNT(*) FROM usuarios WHERE username = ?");
   $verificar->execute([$username]);
   $esta = $verificar->fetchcolumn();
   if ($esta == 1) {
      echo "El nombre de usuario no esta disponible";
   } else {
      $crear = $this->db->prepare("INSERT INTO usuarios (username, password, admin, permiso) VALUES (:username, :password, :admin, :permiso)");
      $encriptada = password_hash($password, PASSWORD_DEFAULT);
      $crear->execute([':username' => $username, ':password' => $encriptada, ':admin' => 0, ':permiso' => 'no']);
      echo 'Usuario creado con exito!<br>';
   }
}

public function iniciarSesion($username, $password){
   $verificarUsuario = $this->db->prepare("SELECT COUNT(*) FROM usuarios WHERE username = ?");
   $verificarUsuario->execute([$username]);
   $esta = $verificarUsuario->fetchcolumn();
   if ($esta == 0) {
      echo "El usuario ingresado no existe.";
   } else {
      $verificarContra = $this->db->prepare("SELECT password FROM usuarios WHERE username = :username");
      $verificarContra->execute(['username' => $username]);
      $resultado = $verificarContra->fetch(PDO::FETCH_ASSOC);
      if (password_verify($password, $resultado['password'])) {
         echo 'Inicio de sesion con exito!<br>';
         $idUsuario = $this->db->prepare("SELECT id_usuario FROM usuarios WHERE username = :username");
         $idUsuario->execute(['username' => $username]);
         $resultadoId = $idUsuario->fetch(PDO::FETCH_ASSOC);
         return $resultadoId['id_usuario'];
      } else {
         echo 'La contraseña es incorrecta.';
      }
   }
}

public function getData($id_usuario){
   $getData = $this->db->prepare("SELECT admin, permiso FROM usuarios  WHERE id_usuario = :id_usuario");
   $getData->execute(['id_usuario' => $id_usuario]);
   $data = $getData->fetch(PDO::FETCH_ASSOC);
   return $data;
}

public function cambiarContraseña($id_usuario, $antigua, $password){
   $verificarContra = $this->db->prepare("SELECT password FROM usuarios WHERE id_usuario = :id_usuario");
   $verificarContra->execute(['id_usuario' => $id_usuario]);
   $resultado = $verificarContra->fetch(PDO::FETCH_ASSOC);
   if (password_verify($antigua, $resultado['password'])) {
      $cambiar = $this->db->prepare("UPDATE usuarios SET password = :password WHERE id_usuario = :id_usuario");
      $encriptada = password_hash($password, PASSWORD_DEFAULT);
      $cambiar->execute(['id_usuario' => $id_usuario, 'password' => $encriptada]);
      echo 'Contraseña cambiada con exito.';
   } else {
      echo 'La contraseña antigua es incorrecta.';
   }
}

public function traerUsuarios(){
   $usuarios = $this->db->query("SELECT * FROM usuarios");
   return $usuarios->fetchall(PDO::FETCH_ASSOC);
}

public function permisoUsuario($id_usuario, $permiso){
   $validar = $this->db->prepare("UPDATE usuarios SET permiso = :permiso WHERE id_usuario = :id_usuario");
   $validar->execute(['permiso' => $permiso, 'id_usuario' => $id_usuario]);
   echo 'Permiso cambiado con exito.';
   }
}


?>