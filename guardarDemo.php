 <!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<?php
$valor=$_POST["nombre"];

echo "Hola ...." .  htmlspecialchars($valor) . "!";

include_once("DemoCollector.php");

$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj ->createDemo($valor);

echo "Valor agregado:  </br>";
?>


<div><a href="index.php">Volver al inicio</a></div>
 

</body>
</html> 
