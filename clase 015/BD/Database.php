<?php
class Database { // se creo una clase con los datos de la base, no es necesario. pero para mas facilidad
 private $host = "localhost";
 private $db = "usuarios";
 private $user = "root";
 private $pass = "";
 private $charset = "utf8mb4";  

 public function connect() {                                                //para conectar con la base de datos, 
 try {                                                                      //con esto se conecta
 $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
 $pdo = new PDO($dsn, $this->user, $this->pass);                            //con esto en concreto conecta
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);             //esto cambia como se comporta ante errores
 return $pdo;                                                               //
 } catch (PDOException $e) {                                                //esto para si falla
 die("Error en la conexión: " . $e->getMessage());                          //devolver el error si falla
 }
 }
}
?>

<!--
copiar y pegar el codigo de 


-->