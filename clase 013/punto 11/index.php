<?php
$api= file_get_contents('https://pokeapi.co/api/v2/pokemon?limit=10');
$data= json_decode($api);

$filtrados= array();
for ($i=0; $i < count($data->results); $i++){
    $api2= file_get_contents("{$data->results[$i]->url}");
    $data2= json_decode($api2);
    $fuego = false;
    for ($i2=0; $i2 < count($data2->types); $i2++){
        if($data2->types[$i2]->type->name == "fire"){
            $fuego = true;
        }  
    }
    if ($fuego == true){
        array_push($filtrados, $data->results[$i]->name);
    }
}

echo "Los poquemones de tipo fuego son:<br>";
for($i=0; $i < count($filtrados); $i++){
    echo "-{$filtrados[$i]}<br>";
} 

?>