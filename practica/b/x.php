<?php

//require_once '../a/y.php';
require_once '../a/y.php';

date_default_timezone_set('America/Argentina/Buenos_Aires');

$aux = new DateTime(date("Y-m-d H:i:s"));
$fecha = $aux->format('Y/m/d H:i:s');

//parent::__construct(){}

echo $fecha .'<br>'; 



$id = random_int(1, 1000);

echo $id;




//if (isset($_POST["submit"]))

//$name = $_POST['name'];
?>
<html>
<body>

<form method="POST" action="y.php">
  Name: <input type="text" name="name">
  <input type="submit">
</form>

</body>
</html>
