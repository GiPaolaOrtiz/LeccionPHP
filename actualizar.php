<!DOCTYPE html>
<html>

<body>
<div id="main">
<?php

$nombre=$_POST["nombre"];
$iddemo=$_POST["iddemo"];

echo "Ediciones en proceso... </br>";

include_once("DemoCollector.php");
$DemoCollectorObj= new DemoCollector();
$DemoCollectorObj->updateDemo($iddemo,$nombre);

echo "id :".$iddemo." actualizado a:".$nombre."</br>";
?>

<div><a href="index.php">Volver al inicio</a></div>
</div>

</body>
</html>

