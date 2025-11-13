<?php

require_once('Persona.php');

class Paciente extends Persona{
    public $nroHistoriaClinica, $fechaIngreso;
    
    public function mostrarDatosPaciente(){
        echo 'Numero de Historia Clinica: '.$this->nroHistoriaClinica.'<br>Fecha de ingreso: '.$this->fechaIngreso.'<br>';
    }
    
}

/*

//test clase
$marito = new Paciente('Mario','Perez',13432642);
$marito->nroHistoriaClinica = 13;
$marito->fechaIngreso = new Datetime('2000-10-27')->format('Y-m-d');
$marito->mostrarInformacion();
$marito->mostrarDatosPaciente();

*/

?>