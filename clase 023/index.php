<?php

/*

Ejercicio Práctico de PHP POO: Sistema de Clínica Médica

recuperatorio 24-25
31 final los que tengan que hacer el final

encapsulamiento: no va 

funciones estaticas, se utilizan si necesidad de instanciar un objeto

en funciones y trait

se puede llamar a la funcion haciendo referencias a la clase y no al objeto

se realiza para hacer un helper, como poner todo en mayuscala, minuscula, un loger, poner upercamelcase, 

esto entra en parcial.

*/

trait Libreria{

    public static function loger(){
        echo "log";
    }
}

class Persona{
    use Libreria;
}


Persona::loger();


// static en variables, al ser estatic solo se inica la primera vez, cada vez que se llame dara un vallor diferente

function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

//Las variables estáticas también proporcionan una forma de manejar funciones recursivas. La siguiente función cuenta recursivamente hasta 10, 
// usando la variable estática $count para saber cuándo parar:


function test2()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test2();
    }
    $count--;
}

?>