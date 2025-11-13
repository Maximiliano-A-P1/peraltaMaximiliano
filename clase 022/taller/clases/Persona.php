<?php

class Persona{
    protected $nombre, $apellido, $telefono;

    public function __construct($nombre, $apellido, $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->telefono = $telefono;
    }
    public function mostrarInformacion(){
        //echo "<script>console.log('".json_encode($data)."')</script>";
        //echo "<script>console.log('Nombre:".json_encode($this->nombre)."')</script>";
        //echo "<script>console.log('Apellido:".json_encode($this->apellido)."')</script>";
        //echo "<script>console.log(".json_encode($this->telefono).")</script>";
        //por consola de terminal
        return('Nombre: '.$this->nombre.'Apellido: '.$this->apellido.'Telefono:'.$this->telefono);
    }
}

//$juan = new Persona('Juan','Monte','3446-123456');
//$juan->mostrarInformacion();

?>