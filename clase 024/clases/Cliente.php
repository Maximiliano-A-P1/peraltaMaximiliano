<?php

require_once('Usuario.php');

class Cliente extends Usuario{
    public $nroCliente, $clase = 'Cliente'; 

    function __construct($nombre, $dni, $email, $nroCliente){
        parent::__construct($nombre, $dni, $email);
        $this->nroCliente = $nroCliente;
        $this->registro;
    }
}

?>