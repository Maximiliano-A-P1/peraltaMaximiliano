<?php
class Persona{
    public $name;

    private const paises = ['argentina', 'brasil'];

    public function __construct($name){
        $this->name = $name;
    }

    public function mostrar(){
        echo self::paises[1];
    }
}

$x = new Persona('marco');
$x->mostrar();



?>