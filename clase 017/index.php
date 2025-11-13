<?php
?>
<form action="revisar.php" method="POST">
    <label>E-mail: </label>
    <input name="e-mail" type="text">
    <label>Contraseña: </label>
    <input name="contraseña" type="text">

    <button type="submit">Subir</button>
</form>
<!--
en el sistema arrancar por un login 

encrip php  para ocultar la contraseña

variables globales:
$_post 
$_get

$variablex =$_post['name=']; siempre validar tanto en frontend como en backend

ahora:
armar el formulario de inicio 

<form>
method="post"        /         /get lo envia por html, problemas de seguridad  / "revisar.php" va y ejecuta todo lo que esta en ese archivo, viajan los datos en el formulario, tienen que tener el atributo name="" 

input= email
input= pass

input = submit


action
</form>

var_dump(%email)

password_hash


la sesion se setea el tiempo antes de cierre de sesion
-->