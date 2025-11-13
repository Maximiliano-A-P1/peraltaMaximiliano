<!--
cd '.\clase 013\'
cd '.\punto 1\'
php -S localhost:8000

-->
<?php
$api = file_get_contents('http://api.open-notify.org/astros.json');
$data = json_decode($api);

class Astronauta{
public $nombre;
public $nave;

public function __construct($nombre,$nave){
$this-> nombre = $nombre;
$this-> nave = $nave;
}

public function mostrar(){
echo "nombre: {$this -> nombre}<br>
nave: {$this -> nave}<br><br>";
}
}

echo "Los astronautas que estan en el espacio son:<br>";

foreach($data ->people as $people){
$peoples = new Astronauta($people->name,$people->craft);
$peoples -> mostrar();
}


?>