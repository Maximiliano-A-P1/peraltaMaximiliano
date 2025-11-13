<?php
/*parcial 2 Maximiliano Agustin Peralta
el relative path esta copiado, con clik derecho sobre el nombre del archivo.php,  pero no me lo quiere ejecutar la consola. Todo el codigo esta hecho sin probar, 
desconosco porque la notebook no me lo reconoce, antes lo hacia, lo puse en la carpeta del xamp y no me lo reconoce tampoco al path
*/

require_once 'clases\Envio.php';
require_once 'clases\EnvioInternacional.php';
require_once 'clases\EnvioNacional.php';
require_once 'trait\RegistroTrait.php';

$cordoba = new EnvioNacional('Buenos Aires', 12000,'Córdoba','Camion');
$cordoba->calcularCostoFinal();
$cordoba->verificarDistancia(700);
$cordoba->mostrarDatos();

$japon = new EnvioInternacional('Buenos Aires',50000,'Tokio','si');
$japon->calcularCostoFinal();
$japon->verificarRestricciones();
$japon->mostrarDatos();

?>