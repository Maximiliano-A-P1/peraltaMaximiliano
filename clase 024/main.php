<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
require_once('clases\Cliente.php');
require_once('clases\Administrador.php');

$mati = new Administrador('Matias Morales',123456789,'ElMati@gmail.com',42);

/*

$nacimiento = new DateTime("2000-01-14");
$hoy = new DateTime();
$años = $hoy->diff($nacimiento)->format('%Y');
$años = $años;
if ($años > 18) {
    echo $años;
}

*/

?>