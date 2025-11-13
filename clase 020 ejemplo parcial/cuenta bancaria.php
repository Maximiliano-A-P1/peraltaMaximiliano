<?php
// consignas del archivo 
//Desarrollar un pequeño sistema bancario utilizando Programación Orientada a Objetos en PHP.pdf


class CuentaBancaria {
    public $propietario, $saldo;

    public function __construct($propietario, $saldo){
        $this->propietario = $propietario;
        $this->saldo = $saldo;
    }

    public function consultarSaldo(){
        echo $this->saldo;
    }

    public function depositarSaldo($deposito){
        $this->saldo = $saldo + $deposito;
        return $saldo;
    }
}

?>