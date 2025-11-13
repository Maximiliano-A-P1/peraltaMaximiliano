<?php

$api = file_get_contents('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd');
$data = json_decode($api);

for ($i= 0; $i< (count($data)-1); $i++){
    for ($i2= 0; $i2< (count($data)-1); $i2++) {
        if ($data[$i2]->current_price < $data[$i2+1]->current_price){
            $aux = $data[$i2];
            $data[$i2] = $data[$i2+1];
            $data[$i2+1] = $aux;
        }
    }
}

echo 'Los 5 criptomonedas mas caras actualmente son: <br>';

for ($i= 0; $i< 5; $i++) {
    echo $data[$i]->id.'<br>';
}
?>