<?php
class CuerpoCeleste{
    public $nombre;
    public $tamaño;

    public function __construct($nombre,$tamaño){
        $this-> nombre = $nombre;
        $this-> tamaño = $tamaño;
    }
}

$api = file_get_contents('https://api.le-systeme-solaire.net/rest/bodies/');
$data = json_decode($api);

for($i=0; $i < count($data->bodies)-1; $i++){
    for($i2 = 0; $i2 < count($data->bodies) -1; $i2++){
        if($data->bodies[$i2]->meanRadius < $data->bodies[$i2+1]->meanRadius){
            $aux = $data->bodies[$i2];
            $data->bodies[$i2] = $data->bodies[$i2+1];
            $data->bodies[$i2+1] = $aux;
        }
    }
}

echo "Los tres planetas mas grandes (meanRadius) son: <br>";
for ($i = 0 ; $i < 3; $i++){
    echo "{$data->bodies[$i]->name}<br>";
}

?>