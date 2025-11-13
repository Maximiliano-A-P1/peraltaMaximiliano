<?php
require_once "dataBase.php";
class Modificacion{
 private $db;
 public function __construct() {
 $this->db = (new Database())->connect();
 }

public function registrar($id_usuario, $id_producto, $fecha_hora){
 $registro = $this->db->prepare("INSERT INTO modificaciones (id_usuario, id_producto, fecha_hora) VALUES (:id_usuario, :id_producto, :fecha_hora)");
 $registro->execute(['id_usuario' => $id_usuario, 'id_producto' => $id_producto, 'fecha_hora' => $fecha_hora]);
}

public function mostrarRegistro(){
    $mostrar = $this->db->query("SELECT * FROM modificaciones");
    return $mostrar->fetchall(PDO::FETCH_ASSOC); 
}

}
?>