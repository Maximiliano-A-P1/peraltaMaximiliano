<?php

require_once('Usuario.php');

class Administrador extends Usuario{
    public $codigoAcceso, $clase = 'Administrador';

    function __construct($nombre, $dni, $email, $codigoAcceso){
        parent::__construct($nombre, $dni, $email);
        $this->codigoAcceso = $codigoAcceso;
        $this->registro($this->clase);
    }
}

?>