<?php
require_once "Database.php";
class User {
 private $db;
 public function __construct() {
 $this->db = (new Database())->connect();
 }
 public function add($nombre, $apellido) {
 $sql = "INSERT INTO users (nombre, apellido) VALUES (:nombre, :apellido)";
 $stmt = $this->db->prepare($sql);
 $stmt->execute([':nombre' => $nombre, ':apellido' => $apellido]);
 }
 public function getAll() {
 $sql = "SELECT * FROM users";
 $stmt = $this->db->query($sql);
 return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }
 public function update($id, $nombre, $apellido) {
 $sql = "UPDATE users SET nombre = :nombre, apellido = :apellido WHERE id = :id";
 $stmt = $this->db->prepare($sql);
 $stmt->execute([':nombre' => $nombre, ':apellido' => $apellido, ':id' => $id]);
 }
 public function delete($id) {
 $sql = "DELETE FROM users WHERE id = :id";
 $stmt = $this->db->prepare($sql);
 $stmt->execute([':id' => $id]);
 }
}

?>


<!--
esto, cuando ejecute el require_once "Database.php" va a utilizar cosas de la base de datos



INSERT INTO users (nombre, apellido) VALUES
('Juan', 'Pérez'),
('María', 'Gómez'),
('Carlos', 'Ramírez'),
('Laura', 'Fernández'),
('Pedro', 'López'),
('Ana', 'Martínez'),
('José', 'Rodríguez'),
('Lucía', 'Torres'),
('Miguel', 'Díaz'),
('Sofía', 'Morales');

-->