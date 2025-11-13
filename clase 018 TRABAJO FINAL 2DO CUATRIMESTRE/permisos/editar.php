<?php

session_start();

require_once __DIR__ . '\..\clases\productos.php';

if ($_SESSION['permiso'] != 'editor'){
    header("Location: ..\index.php");
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
    <link rel="stylesheet" href="../css/editar.css">
</head>
<body>
  <div id="this">
  </div>
  <div class="formT1">
    <form action="edicion.php" method="post">
        <input type="hidden" name="form" value="agregar">
        <p>AGREGAR ITEM</p>
        <div class="flex">
            <div class="left">
                <p class="ligado">Nombre:</p>
                <input type="text" class="largo" required name="nombre_producto"></input>
                <p class="ligado">Precio:</p>
                <input type="number" step="any" class="largo" required name="precio_producto"></input>
                <p class="ligado">Nombre de la imagen:</p>
                <input type="text" class="largo" required name="url_imagen"></input>
                <div class="flex datos">
                    <div>
                        <p class="ligado">Clasificacion:</p>
                        <select class="select1" required name="clasificacion">
                            <option value="cartas">cartas</option>
                            <option value="muebles">muebles</option>
                        </select>
                    </div>
                    <div>
                        <p class="ligado">En venta:</p>
                        <select class="select2" required name="en_venta">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div>  
                        <p class="ligado">Cantidad:</p>
                        <input type="number" class="largo" placeholder="Ej: 2000.5" required name="cantidad_producto"></input>
                    </div>
                    <button class="agregarbt" type="submit">Agregar</button>
                </div>          
            </div>
            <div>
                <p class="ligado">Descripcion:</p>
                <textarea class="descipcion1" name="descripcion"></textarea>
            </div>
        </div>
    </form>
  </div>
  <div>
    <form id="buscar" action="edicion.php" method="post">
        <input type="hidden" name="form" value="eliminar">
        <p>BUSCAR/ELIMINAR PRODUCTO(solo por ID)</p>
        <div class="flex">
            <div class="left">
                <p class="ligado">Por ID</p>
                <input class="eleccion" type="radio" checked name="idName" value='id'></input>
                <input type="number" id="porId" name="id_producto"></input>
            </div>
            <div>
                <p class="ligado">Por Nombre</p>
                <input class="eleccion" type="radio" name="idName" value='name'></input>
                <input type="text" id="porNom"></input>
            </div>
        </div>
        <div id="debajo">
        </div>
        <div id="bts" class="flex">
            <button id="btbuscar" type="button" onclick="buscar()">Buscar</button>
            <button id="eliminar" type="submit">Elimninar</button>
        </div>
    </form>
  </div id="resultado">
  <div class="formT1">
    <form action="edicion.php" method="post">
        <input type="hidden" name="form" value="editar">
        <div class="flex">
            <p>EDITAR ITEM (Ingresa la id)</p>
            <input type="number" class="idEdi" required name="id_producto"></input>
        </div>
        <div class="flex">
            <div class="left">
                <p class="ligado">Nombre:</p>
                <input type="text" class="largo" required name="nombre_producto"></input>
                <p class="ligado">Precio:</p>
                <input type="number" step="any" class="largo" required name="precio_producto"></input>
                <p class="ligado">Nombre de la imagen:</p>
                <input type="text" class="largo" required name="url_imagen"></input>
                <div class="flex datos">
                    <div>
                        <p class="ligado">Clasificacion:</p>
                        <select class="select1" required name="clasificacion">
                            <option value="cartas">cartas</option>
                            <option value="muebles">muebles</option>
                        </select>
                    </div>
                    <div>
                        <p class="ligado">En venta:</p>
                        <select class="select2" required name="en_venta">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div>  
                        <p class="ligado">Cantidad:</p>
                        <input type="number" class="largo" placeholder="Ej: 2000.5" required name="cantidad_producto"></input>
                    </div>
                    <button class="agregarbt" type="submit" >Editar</button>
                </div>          
            </div>
            <div>
                <p class="ligado">Descripcion:</p>
                <textarea class="descipcion1" name="descripcion"></textarea>
            </div>
        </div>
    </form>
  </div>
  <div id="productos">
    <p id="lista">Lista de productos</p>
  </div>
</body>
<script src="../js/editar.js"></script>
</html>
