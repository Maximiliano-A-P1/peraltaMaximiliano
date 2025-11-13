<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

trait RegistroTrait{
    public function registro(){
        $fechaActual = new DateTime(date("Y-m-d H:i:s")->format('Y/m/d H:i:s'));
        return $fechaActual;
    }
}

?>