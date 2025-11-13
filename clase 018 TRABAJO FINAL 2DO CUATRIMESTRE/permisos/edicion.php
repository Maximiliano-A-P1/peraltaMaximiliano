<?php

session_start();

require_once __DIR__ . '\..\clases\productos.php';
require_once __DIR__ . '\..\clases\modificaciones.php';

if ($_SESSION['permiso'] != 'editor'){
    header("Location: ..\index.php");
    exit();
} 

date_default_timezone_set('America/Argentina/Buenos_Aires');

$form = $_POST['form'];

$thisProducto = new Producto();
$thisModificacion = new Modificacion();

if ($form == 'agregar'){
    $nombre_producto = $_POST['nombre_producto'];
    $precio_producto = $_POST['precio_producto'];
    $cantidad_producto = $_POST['cantidad_producto'];   
    $en_venta = $_POST['en_venta'];
    $url_imagen = $_POST['url_imagen'];
    $clasificacion  = $_POST['clasificacion'];
    $descripcion = $_POST['descripcion'];
    $thisProducto->ingresarProducto($nombre_producto, $precio_producto, $cantidad_producto, $en_venta, $url_imagen, $clasificacion, $descripcion);
}

if ($form == 'editar'){
    $id_producto = $_POST['id_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $precio_producto = $_POST['precio_producto'];
    $cantidad_producto = $_POST['cantidad_producto'];   
    $en_venta = $_POST['en_venta'];
    $url_imagen = $_POST['url_imagen'];
    $clasificacion  = $_POST['clasificacion'];
    $descripcion = $_POST['descripcion'];
    $thisProducto->actualizarProducto($nombre_producto, $precio_producto, $cantidad_producto, $en_venta, $url_imagen, $clasificacion, $descripcion, $id_producto);

    $id_usuario = $_SESSION['id_usuario'];
    $aux = new DateTime(date("Y-m-d H:i:s"));
    $fecha_hora = $aux->format('Y/m/d H:i:s');
    $thisModificacion->registrar($id_usuario, $id_producto, $fecha_hora);
    
}

if ($form == 'eliminar'){
    $id_producto = $_POST['id_producto'];
    $id_usuario = $_SESSION['id_usuario'];
    $aux = new DateTime(date("Y-m-d H:i:s"));
    $fecha_hora = $aux->format('Y/m/d H:i:s');
    $thisModificacion->registrar($id_usuario, $id_producto, $fecha_hora);

    $thisProducto->eliminarProducto($id_producto);
}
?>