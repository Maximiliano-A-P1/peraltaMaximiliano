<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

trait Logger{
    public function registro($clase){
        $tiempo = new DateTime(date("Y-m-d H:i:s"))->format('Y/m/d H:i:s');
        echo '['.$tiempo.'] Se registro un '.$clase;
    }
}

?>