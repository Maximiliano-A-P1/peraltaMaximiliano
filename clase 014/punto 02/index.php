<?php
class Vehiculo {
    public $patente;
    public $marca;
    private $kilometraje;

    public function __construct($patente, $marca, $kilometraje){
        $this-> patente = $patente;
        $this-> marca = $marca;
        $this-> setKilometraje($kilometraje);
    }
    // Obtener valores actuales
    public function getPatente(){
        return $this->$patente;
    }public function getMarca(){
        return $this->$marca;
    }
    public function getKilometraje(){
        return $this->$kilometraje;
    }
    // Actualizacion de valores
    public function setPatente($nuevaPatente){
        $this-> $patente = $nuevaPatente;
    }
    public function setKilometraje($NuevoKilometraje){
        if ($NuevoKilometraje < $kilometraje){
            $this-> $kilometraje = $NuevoKilometraje;
        } else {
            echo "El kilometraje no puede ser menor al anterior";
        }
    }
}
?>