<?php
require_once "User.php";
$user = new User();
$user->add("Juan", "Pérez");
echo "Usuario insertado con éxito.";
?>