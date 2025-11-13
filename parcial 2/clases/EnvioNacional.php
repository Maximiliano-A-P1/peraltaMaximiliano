<?php
require_once('Envio.php');

class EnvioNacional extends Envio{
    public $provinciaDestino, $tipoTransporte, $distancia, $largo;

    public function __construct($origen, $costoBase, $provinciaDestino, $tipoTransporte){
        parent::__construct($origen, $costoBase);
        $this->provinciaDestino = $provinciaDestino;
        $this->tipoTransporte = $tipoTransporte;
        $this->largo = '(Distancia no verificada)';
    }

    public function verificarDistancia($distancia){
        $this->distancia = $distancia;
        if ($distancia < 300) {
            $this->largo = '(Envio corto)';
        }
        if ($distancia >= 300) {
            $this->largo = '(Envio largo)';
        }
    }
    public function mostrarDatos(){
        echo 'Origen: '.$this->origen.'<br>Destino: '.$this->provinciaDestino.'<br>Costo base: $'.$this->costoBase.'<br>Costo final: $'.$this->costoFinal.'<br>Fecha registro: '.$this->registo().'<br>Provincia destino: '.$this->provinciaDestino.'<br>Tipo transporte: '.$this->tipoTransporte.'<br>Distancia: '.$this->distancia = $distancia.$this->largo;
    }
}
?>