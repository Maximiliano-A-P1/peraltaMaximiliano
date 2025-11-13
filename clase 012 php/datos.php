<?php
//phpinfo();
//$letra = "hola";
//$numero = "43";
//$resultado = $letra + $numero;
//echo $resultado;


$frutas = ['pera','frutilla'];
for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i].'<br>';
};


$persona =['nombre'=>'susan','apellido'=>'perez'];
//nombre seria atributo, susan valor

//$persona->nombre
//$persona['nombre']
//mostrar el nombre en h1

echo '<h1>'.$persona['nombre'].'</h1>';

?>

<!-- el echo muestra solo string -->

