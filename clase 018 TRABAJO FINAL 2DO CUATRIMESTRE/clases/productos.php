<?php
require_once "dataBase.php";
class Producto {
 private $db;
 public function __construct() {
 $this->db = (new Database())->connect();
}

public function ingresarProducto($nombre_producto, $precio_producto, $cantidad_producto, $en_venta, $url_imagen, $clasificacion, $descripcion) {
 $ingresar = $this->db->prepare("INSERT INTO productos (nombre_producto, precio_producto, cantidad_producto, en_venta, url_imagen, clasificacion, descripcion) VALUES (:nombre_producto, :precio_producto, :cantidad_producto, :en_venta, :url_imagen, :clasificacion, :descripcion)");
 $ingresar->execute([':nombre_producto' => $nombre_producto, ':precio_producto' => $precio_producto, ':cantidad_producto' => $cantidad_producto, ':en_venta' => $en_venta, ':url_imagen'  => $url_imagen, ':clasificacion'  => $clasificacion, ':descripcion' => $descripcion]);
 echo 'Producto ingresado con exito';
}

public function traerProductos(){
    $productos = $this->db->query("SELECT * FROM productos");
    return $productos->fetchall(PDO::FETCH_ASSOC);
}

public function actualizarProducto($nombre_producto, $precio_producto, $cantidad_producto, $en_venta, $url_imagen, $clasificacion, $descripcion, $id_producto){
    $actualizar = $this->db->prepare("UPDATE productos SET nombre_producto = :nombre_producto, precio_producto = :precio_producto, cantidad_producto = :cantidad_producto, en_venta = :en_venta, url_imagen = :url_imagen, clasificacion = :clasificacion, descripcion = :descripcion WHERE id_producto = :id_producto");
    $actualizar->execute([':nombre_producto' => $nombre_producto, ':precio_producto' => $precio_producto, ':cantidad_producto' => $cantidad_producto, ':en_venta' => $en_venta, ':url_imagen' => $url_imagen, ':clasificacion' => $clasificacion, ':descripcion' => $descripcion, ':id_producto' => $id_producto]);
    echo 'Producto actualizado con exito';
}

public function eliminarProducto($id_producto) {
    $eliminar = $this->db->prepare("DELETE FROM productos WHERE id_producto = :id_producto");
    $eliminar->execute([':id_producto' => $id_producto]);
    echo 'Producto eliminado con exito.';
}

}

?>