<?php
require_once "User.php";
$user = new User();
$user->update(1, "Carlos", "Gómez");
echo "Usuario actualizado.";
?>