<?php
//el link de la api me tira esto:
//{"error":"Incorrect path. Please check https://docs.coingecko.com/"}

class CryptoMoneda{
    public $nombre;
    public $precio;

    public function __construct($nombre,$precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    public function monstrar(){
        echo "La moneda {$this->nombre}<br>
        vale: {$this->precio}$<br><br>";
    }
}
//y supongo que aca iria un for que me permita recorrer un array que contenga las monedas
?>