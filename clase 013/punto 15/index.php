<?php

for ($i = 0; $i < 5 ; $i++){
    $api = file_get_contents('https://api.quotable.io/random');
    $data = json_decode($api);

    echo 'Autor: '.$data->author. ' frase: '.$data->content.' <br><br>';
}


?>