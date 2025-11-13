<?php

require_once('D:\programacion\clase 024\trait\Logger.php');

class Usuario{
    public $nombre, $dni, $email;

    public function __construct($nombre, $dni, $email){
        $this->nombre=$nombre;
        $this->dni=$dni;
        $this->email=$email;
    }

    public function mostrarInformacion(){
        echo 'Nombre: '.$this->nombre.'<br>DNI: '.$this->dni.'<br>Email: '.$this->email.'<br>';
    }

    use Logger;
}

?>