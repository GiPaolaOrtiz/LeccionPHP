<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<nav>
<a href="index.php">HOME</a> |
<a href="">CSS</a> |
<a href="/js/">JavaScript</a> |
<a href="/jquery/">jQuery</a>
</nav>

<br>
<h2>USUARIO</h2>

<?php

if (isset($_SESSION['MiSesion'])){
	session_destroy();
	echo "Se ha destruido sesion </br>";
	echo "<a href='index.php'>Volver</a>";
}
else{
	echo "ERROR... </br>";
	echo "<a href='index.php'>Volver</a>";

}

?>


</body>
</html>