<?php

session_start();

require_once __DIR__ . '\clases\productos.php';

if (!isset($_SESSION['id_usuario'])){
    header("Location: index.php");
    exit();
}

$saludo = json_encode($_SESSION['username']);

echo '<script>let username = ' . $saludo . ';</script>';



$thisProductos = new Producto();
$auxDatos = $thisProductos->traerProductos();

$datos = json_encode($auxDatos);

echo '<script>let datos = ' . $datos . ';</script>';

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a x</title>
    <link rel="stylesheet" href="css/pagina.css">
</head>
<body>
  <div id="this">
  </div>
  <a href="cambiar.php"><p id="contra">Cambiar contraseña</p></a>
  <div id="clasificaciones">
    <p>Selecciona una categoria</p>
    <button onclick="buscar('cartas')">Cartas</button>
    <button onclick="buscar('electrodomesticos')">Electrodomesticos</button>
    <button onclick="buscar('muebles')">Muebles</button>
    <button onclick="buscar('panaderia')">Panaderia</button>
  </div>
  <div id="productos">
  </div>
</body>
<script src="js/pagina.js"></script>
</html>
