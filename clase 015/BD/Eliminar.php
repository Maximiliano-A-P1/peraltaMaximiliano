<?php
require_once "User.php";
$user = new User();
$user->delete(1);
echo "Usuario eliminado.";
?>