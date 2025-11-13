<?php
require_once 'Envio.php';

$paisesRestringidos = ['Brasil','Perú','Chile'];

class EnvioInternacional extends Envio{
    public $paísDestino, $requiereAduana;

    public function __construct($origen, $costoBase, $paísDestino, $requiereAduana){
        parent::__construct($origen, $costoBase);
        $this->paísDestino = $paísDestino;
        $this->requiereAduana = $requiereAduana;
    }

    public function verificarRestricciones(){
        $valido = true;
        for ($i = 0; $i < count($paisesRestringidos); $i++ ) {
            if ($this->paísDestino = $paisesRestringidos[$i]) {
            $valido = false;
        }
        }
        if ($valido = true){
            echo 'El envio no esta permitido';
        }
        if ($valido = false){
            echo 'El envio no esta permitido';
        }
    }

    public function mostrarDatos(){
        echo '<br>Origen: '.$this->origen.'<br>Destino: '.$this->paísDestino.'<br>Costo base: $'.$this->costoBase.'<br>Costo final: $'.$this->costoFinal.'<br>Fecha registro: '.$this->registo().'<br>País destino: '.$this->paísDestino.'<br>Requiere Aduana: '.$this->requiereAduana;
    }

}

?>