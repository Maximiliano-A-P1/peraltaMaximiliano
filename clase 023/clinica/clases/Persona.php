<?php

/*


*/

class Persona{
    protected $nombre, $apellido, $dni;

    public function __construct($nombre, $apellido, $dni){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
    }

    public function mostrarInformacion(){
        echo 'Nombre: '.$this->nombre.'<br>Apellido: '.$this->apellido.'<br>DNI: '.$this->dni.'<br>';
    }
}

//test clase
//$carlos = new Persona('Martin', 'Gomez',13456788);
//$carlos->mostrarInformacion();



?>