<?php
/* 
falte este dia, me dijieron que dieron herencia y polimorfismo.

Herencia, una clase es hija de otra por lo que hereda sus atributos y metodos publicos

*/

class Persona{
    public $nombre, $apellido, $edad;

    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre(){
        var_dump($this->nombre . " " . $this->apellido);
    }
}

//ejemplo extendiendo una clase

class Trabajador extends Persona{
    //public $nombre, $apellido, $edad; no es necesario escribirlas pero estan

    public $empleo, $horario, $salario;
    
    public function setEmpleo($empleo, $horario, $salario){
        $this->empleo = $empleo;
        $this->horario = $horario;
        $this->salario = $salario;
    }

    public function getEmpleo(){
        var_dump($this->empleo . " " . $this->horario . " " . $this->salario);
    }
}

$fede = new Trabajador("Fede","Este",25);
$fede->setEmpleo("Pintor","09:00-15:00",400000);

var_dump($fede)

/*
Polimorfismo: 
si la clase hija quiere modificar una metodo, lo hace de lad siguientes maneras:

sobrescribir:

    public function getNombre(){
        echo 'Hola, me llamo:'
        echo ($this->nombre . " " . $this->apellido) ;
        
    }

extender:

    parrent::getNombre(){
        //var_dump($this->nombre . " " . $this->apellido) ; esto estaria
        echo 'te saluda.'
    }

*/

?>