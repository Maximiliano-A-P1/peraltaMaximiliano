<?php
$api1= file_get_contents('https://api.agify.io/?name=lucas');
$data1 = json_decode($api1);

$edadLucas = $data1->age;
echo 'La edad de Lucas es: '.$edadLucas."años. <br>";

$api2= file_get_contents('https://api.agify.io/?name=tito');
$data2 = json_decode($api2);

$edadTito = $data2->age;
echo 'La edad de Tito es: '.$edadTito." años. <br>";

$api3= file_get_contents('https://api.agify.io/?name=marito');
$data3 = json_decode($api3);

$edadMarito = $data3->age;
echo 'La edad de Marito es: '.$edadMarito." años. <br><br>";

class Persona{
    public $name, $edad;

    public function __construct($name, $edad){
        $this->name = $name;
        $this->edad = $edad;
    }
}

$edades = [
    $lucas = new Persona('Lucas',$data1->age),
    $tito = new Persona('Tito',$data2->age),
    $marito = new Persona('Marito',$data3->age),
];

$mayor = new Persona($edades[0]->name,$edades[0]->edad);

for ($i=1; $i< count($edades); $i++){
    if ($edades[$i]->edad > $mayor->edad){
        $mayor->name = $edades[$i]->name;
        $mayor->edad = $edades[$i]->edad;
    }
}

echo 'El mayor es: '.$mayor->name.' con '.$mayor->edad.' años.';

?>