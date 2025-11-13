<?php

/*

para poder relaizar herencia multiple en php utilizamos trait

con Mayus y una sola palabra

*/

trait FuncionesMatematicas{
    function sumar(){
        return resultado;
    }
}

class Cuenta{
    use FuncionesMatematicas;
    $this->sumar();
}


?>