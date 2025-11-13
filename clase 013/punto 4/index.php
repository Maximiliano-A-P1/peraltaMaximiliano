<?php

//como no habia api supuse que era plantearlo de manera teorica.
$api = file_get_contents('xlink');
$data = json_decode($api);

class Noticia{
    public $titulo;
    public $fecha;
    public $reportero;

    public function __construct($titulo,$fecha,$reportero){
        $this->titulo = $titulo;
        $this->fecha = $fecha;
        $this->reportero = $reportero; 
    }

    public function mostrar(){
        echo "{$this->noticia}<br>
        fecha de publicacion: {$this->fecha}<br>
        reportero: {$this->reportero}<br><br>";
    }
}
for ($i = 0; $i < count($data)-1; $i++){
    for ($i2 = 0; $i2< count($data)-1; $i++)
    if ($data[$i2]->fecha > $data[$i2+1]->fecha) {
        $aux = $data[$i2];
        $data[$i2] = $data[$i2+1];
        $data[$i2+1] = $aux;   
    }
for ($i = 0; $i < 3; $i++){
    $aux1=$data[$i]->titulo;
    $aux2=$data[$i]->fecha;
    $aux3=$data[$i]->reportero;
    $noticia = new Noticia($aux1,$aux2,$aux3);
    $noticia->mostrar();
}

//supongo que estaria listo,
}


?>