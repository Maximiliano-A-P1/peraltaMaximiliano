<?php
class Ciudad{
    public $name;
    public $temperatura;

    public function __construct($name,$temperatura){
        $this-> name = $name;
        $this-> temperatura = $temperatura;
    }
    public function compararTemperatura($otraCiudad){
        if ($this-> temperatura > $otraCiudad-> temperatura ){
            echo "La mas calida hoy es {$this->name}";
        } 
        if ($this-> temperatura < $otraCiudad-> temperatura ){
            echo "La mas calida hoy es {$otraCiudad->name}";
        }
        if ($this-> temperatura == $otraCiudad-> temperatura ){
        echo "Las 2 ciudades comparadas tienen la misma temperatura hoy";
        }
    }
}

//buenos aires
$api1 = file_get_contents('https://wttr.in/Buenos_Aires?format=j1');
$data1 = json_decode($api1);

$buenosAires = new Ciudad("Buenos Aires",$data1->current_condition[0]->temp_C);

$api2 = file_get_contents('https://wttr.in/Cordoba?format=j1');
$data2 = json_decode($api2);

$cordoba = new Ciudad("Cordoba",$data2->current_condition[0]->temp_C);
$cordoba->compararTemperatura($buenosAires);

?>