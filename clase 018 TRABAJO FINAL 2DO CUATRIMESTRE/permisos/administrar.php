<?php

session_start();

require_once __DIR__ . '/../clases/usuarios.php';
require_once __DIR__ . '/../clases/modificaciones.php';

if ($_SESSION['admin'] != true){
    header("Location: ..\index.php");
    exit();
}

$saludo = json_encode($_SESSION['username']);

echo '<script>let username = ' . $saludo . ';</script>';




$thisUsuario = new Usuario();
$auxDatos = $thisUsuario->traerUsuarios();

$datos = json_encode($auxDatos);

echo '<script>let datos = ' . $datos . ';</script>';




$thisModificicaion = new Modificacion();
$auxDatos2 = $thisModificicaion->mostrarRegistro();

$datos2 = json_encode($auxDatos2);

echo '<script>let datos2 = ' . $datos2 . ';</script>';

?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a x</title>
    <link rel="stylesheet" href="../css/administrar.css">
</head>
<body>
    <div id="this">
    </div>
    <div>
        <form id="buscar" action="cambioPermiso.php" method="post">
        <p>BUSCAR CUENTA/CAMBIAR PERMISO(solo por ID)</p>
        <div class="flex">
            <div class="left">
                <p class="ligado">Por ID</p>
                <input class="eleccion" type="radio" checked name="idName" value='id'></input>
                <input type="number" id="porId" name="id_usuario"></input>
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
            <div>
                <p class="inline">Permiso:</p>
                <select name='permiso' id="eleccion" required>
                    <option value="no">No</option>
                    <option value="editor">Editor</option>
                </select>
                <button id="permiso" type="submit">Cambiar Permiso</button>
            </div>
        </div>
    </form>
    </div>
    <div class ="flex">
        <div class="usuExp">
        </div>
        <div class="modExp">
        </div>
    </div>
</body>
<script src="../js/administrar.js"></script>
</html>