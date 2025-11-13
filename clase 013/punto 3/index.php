<?php
$api = file_get_contents('https://api.exchangerate-api.com/v4/latest/USD');
$data = json_decode($api);

class Moneda{
public $siglas;
public $valorFrenteAlDolar;

public function __construct($siglas,$valorFrenteAlDolar){
$this-> siglas = $siglas;
$this-> valorFrenteAlDolar = $valorFrenteAlDolar;
}

public function mostrar(){
echo "Siglas: {$this -> siglas}<br>
Valor frente al Dolar: {$this -> valorFrenteAlDolar}<br><br>";
}
}

echo "Ejemplos de 5 monedas:<br>";

$rates = (array) $data->rates;

//$AED= array_keys($rates)[1];
//echo $AED;
//$valor = $rates[$AED];
//echo "valor: $valor";

for ($i = 1; $i < 6; $i++) {
    $aux = array_keys($rates)[$i];
    $aux2 = $rates[$aux];
    $moneda = new Moneda($aux,$aux2);
    $moneda->mostrar();
}


?>