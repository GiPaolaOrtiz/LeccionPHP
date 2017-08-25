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
$_SESSION['MiSesion']= $_POST['usuario'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

 echo "Usuario " . $usuario. " pass ". $pass;
 echo "<a href='index.php'>Volver</a>";
?>

</body>
</html>