<!--
cd '.\clase 013\'
cd '.\punto 2\'
php -S localhost:8000
-->
<?php

$api = file_get_contents('https://wttr.in/Gualeguaychu?format=j1');
$data = json_decode($api);

class Clima{
    public $temperatura;
    public $estado;

    public function __construct($temperatura, $estado){
        $this -> temperatura = $temperatura;
        $this -> estado = $estado; 
    }

    public function mostrar(){
        echo "Temperatura: {$this-> temperatura}<br>
        Estado: {$this-> estado}<br><br>";
    }
}
echo "Gualeguaychu:<br>";
$Gualeguaychu = new Clima($data->current_condition[0]->temp_C, $data->current_condition[0]->weatherDesc[0]->value);
$Gualeguaychu-> mostrar();

?>