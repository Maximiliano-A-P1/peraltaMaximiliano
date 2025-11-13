<?php
require_once('Persona.php');

class Medico extends Persona{
    public $especialidad, $matricula, $listaTurnos;

    public function mostrarDatosMedicos(){
        echo 'Especialidad: '.$this->especialidad.'<br>Matricula: '.$this->matricula.'<br>Lista de turnos:<br>';
        for ($i=1; $i < count($listaTurnos); $i++){
            echo $listaTurnos[$i];
        }
    }

    public function asignarTurno(){

    }
}

?>