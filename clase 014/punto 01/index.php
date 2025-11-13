<?php
class Factura {
 public $numero;
 public $fecha;
 private $montoTotal;

 public function __construct($numero, $fecha, $montoInicial) {
 $this-> numero = $numero;
 $this-> fecha = $fecha;
 $this-> setMontoTotal($montoInicial);
 }
 
 public function getMontoTotal() {
 return $this->montoTotal;
 }
 public function setMontoTotal($monto) {
 if ($monto >= 0) {
 $this->montoTotal = $monto;
 } else {
 echo "Error: El monto total no puede ser negativo.\n";
 }
 }
}
// Ejemplo de uso
$factura = new Factura("F001", "2025-08-14", 1500);
echo "Monto inicial: " . $factura->getMontoTotal() . "\n";
$factura->setMontoTotal(2000);
echo "Monto actualizado: " . $factura->getMontoTotal() . "\n";
$factura->setMontoTotal(-500); // No se permitirá
?>