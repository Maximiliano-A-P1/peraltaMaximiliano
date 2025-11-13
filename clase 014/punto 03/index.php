<?php
class cuentaBancaria {
    public $numeroDeCuenta;
    public $titular;
    private $saldo;

    public function __construct($numeroDeCuenta, $titular, $saldo){
        $this-> numeroDeCuenta = $numeroDeCuenta;
        $this-> titular = $titular;
        $this-> saldo = setSaldo($saldo);
    }
    //Obtener valores actuales
    public function getNumeroDeCuenta(){
        return $numeroDeCuenta;
    }
    public function getTitular(){
        return $titular;
    }
    public function getSaldo(){
        return $saldo;
    }
    //Actualizar valores
    public function setNumeroDeCuenta($nuevoNuemroDeCuenta){
        $this-> $nuevoNuemroDeCuenta = $nuevoNuemroDeCuenta;
    }
    public function setTitular($nuevoTitular){
        $this-> $titular = $nuevoTitular;
    }
    public function setSaldo($variacion){
        $auxOp = getSaldo() + $variacion;
        if ($auxOp >= 0){
            $this-> $saldo = $auxOp;
        } else {
            echo "operacion invalidad, la cuenta queda con saldo negativo";
        }
    }
}

?>