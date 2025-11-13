<?php
require_once 'trait\RegistroTrait.php';

class Envio{
public $origen, $costoBase, $costoFinal; 

    public function __construct($origen, $costoBase){
        $this->origen = $origen;
        $this->costoBase = $costoBase;
    }

    public function calcularCostoFinal(){
        $this->costoFinal = $this->costoBase * 1.1;
    }

    use RegistroTrait;
}

?>