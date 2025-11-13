<?php
class Persona{
    public $nombre;
    public $edadEstimada;

    public function __construct($nombre,$edadEstimada){
        $this-> nombre = $nombre;
        $this-> edadEstimada =$edadEstimada;
    }
}

$personas = array();
//tomando como ejemplo 3 
$api1 = file_get_contents('https://api.agify.io/?name=Jalter');
$data1 = json_decode($api1);
$api2 = file_get_contents('https://api.agify.io/?name=Senti');
$data2 = json_decode($api2);
$api3 = file_get_contents('https://api.agify.io/?name=Topaz');
$data3 = json_decode($api3);

$jalter = new Persona($data1->name,$data1->age);
$senti = new Persona($data2->name,$data2->age);
$topaz = new Persona($data3->name,$data3->age);

array_push($personas, $jalter, $senti, $topaz);

$indice;
$mayorEdad = -1;
for ($i = 0; $i < count($personas); $i++){
    if ($personas[$i]->edadEstimada > $mayorEdad){
        $mayorEdad = $personas[$i]->edadEstimada;
        $indice = $i;
    }
} 

echo "La persona con mayor edad (estimada) es: <br>
{$personas[$indice]->nombre} se cree que tiene {$personas[$indice]->edadEstimada} años";

?>