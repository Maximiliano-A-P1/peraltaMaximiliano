<?php
$api= file_get_contents('https://rickandmortyapi.com/api/character'); // utilizando ese link solo me devuelve 20 resultados
$data = json_decode($api);
$result = (array) $data->results;

//echo count($result);
//echo $result[0]->status;

class Personaje{
    public $id;
    public $name;

    public function __construct($id,$name){
        $this-> id = $id;
        $this-> name = $name;
    }
    public function mostrar(){
        echo "ID: {$this -> id}<br>
        Nombre: {$this -> name}<br><br>";
    }
}
echo "Los personajes que estan vivos son: <br>";
for ($i = 0; $i < count($result); $i++){
    if ($result[$i]->status == "Alive"){
        $personaje = new Personaje($result[$i]->id,$result[$i]->name);
        $personaje->mostrar();
    }
}
?>