<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<nav>
<a href="index.php">HOME</a> |
<a href="#">CSS</a> |
<a href="#">JavaScript</a> |
</nav>


<?php
if (isset($_SESSION['MiSesion'])){
	echo "<p>Hola Usuario:(".$_SESSION['MiSesion'].")
		[<a href='salir.php'>Salir</a>]";

		include_once("DemoCollector.php");

echo "<br /> " . "<a href='formularioDemoInsert.php?id=" . "'>Nuevo</a> ";

$id =1;

$DemoCollectorObj = new DemoCollector();

  echo "<h2> Usuarios </h2>";

foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo " <a href='perfil.php?id=". $c->getIdDemo()."'> Perfil </a>" . $c->getIdDemo() . " | " .$c->getNombre(). "  | " .$c->getTipo(). "  | " .$c->getFechanacimiento();     
  echo "<a href='formularioDemoEditar.php?id=". $c->getIdDemo()."'> Editar </a>";
  echo "<a href='eliminar.php?id=". $c->getIdDemo()."'> Eliminar </a>";
                                      
  echo "</div>"; 
}

}
else{
?>
<form action ="login.php" method ="post">
Usuario:<br>
<input type="text" name="usuario">
<br>
Password:<br>
<input type="password" name="pass">
<br><br>
<input type="submit" value="Enviar">
</form>


<?php }?>

 <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/perfil.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/uploadPreview.min.js"></script>
</body>
</html>