<?php
class Alumno {
    public $nombre;
    public $apellido;
    private $notaPromedio;
    private $cantidadDeNotas;

    public function __construct($nombre, $apellido, $notaPromedio){
        $this-> nombre = $nombre;
        $this-> apellido = $apellido;
        $this-> setNotaPromedio($notaPromedio);
        $this-> cantidadDeNotas = 1;
    }
    //Obtener valores actuales
    public function getNombre(){
        return $this->$nombre;
    }
    public function getApellido(){
        return $this->$apellido;
    }
    public function getPromedio(){
        return $this-> $notaPromedio;
    }
    //Actualizar valores
    public function setNotaPromedio($nuevaNota){
        if ($cantidadDeNotas = 1){
            $this->$notaPromedio = $nuevaNota;
        } else {
            $this->$cantidadDeNotas = $cantidadDeNotas + 1;
            $this->$notaPromedio = ($notaPromedio + $nuevaNota)/$cantidadDeNotas;
        }
    } 
}
?>