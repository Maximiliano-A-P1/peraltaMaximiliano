<?php
class DataBase { 
 private $host = "localhost";
 private $db = "proyecto_entregable";
 private $user = "root";
 private $pass = "";
 private $charset = "utf8mb4";  

 public function connect() {                                                                
 $dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
 $pdo = new PDO($dsn, $this->user, $this->pass);                                        
 return $pdo;                                                                            
 }
 }
?>