<?php

$clientes = [];

function validarEdad($fechaNacimiento){
    $nacimiento = new DateTime($fechaNacimiento);
    $ahora = new DateTime(date("Y-m-d"));
    $diferencia = $ahora->diff($nacimiento);
    return $diferencia->format("%y");
}

class Cliente {
    public $nombre, $dni, $fechaNacimiento, $mayorDeEdad;

    public function __construct($nombre, $dni, $fechaNacimiento){
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->mayorDeEdad = false;
        array_push($clientes, [$this->id, ]);
    }

    public function validar(){
        if (validarEdad($this->fechaNacimiento) > 18){
            $mayorDeEdad = true;
        }
    }
}



?>