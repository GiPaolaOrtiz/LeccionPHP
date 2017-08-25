<?php
  session_start();
?>


<!DOCTYPE HTML>


  <body>

<header>
<nav>

</nav>
	
</header>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP

$id=$_GET["id"];
echo "valor de id es ". $id;

include_once('DemoCollector.php');
include_once('Demo.php');

$DemoCollectorObj= new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
print_r($ObjDemo);
?>

<h2>Perfil</h2>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href="css/estiloPerfil.css" rel='stylesheet' type='text/css'>
    
</head>

<body>
    

    <div class="row">

        <div class="col-md-12 col-xs-12" id="datosUsuario">
<img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
            <div id="image-preview">
                <label for="image-upload" id="image-label">Cambiar foto</label>
                <input type="file" name="image" id="image-upload" />
            </div>

            <div id="nombreUsuario">
               <h4>Nombre usuario</h4>
                
               
	<br><br>
	<p>
    Id:<input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdDemo(); ?>" 
    readonly />
    </p>
    <p>

 
    Nombre:<input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" 
    readonly />
    
	<br> <br>
      Tipo:<input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdDemo(); ?>" 
    readonly />
    </p>
    Fecha de Nacimiento:<input type="text" name="fechanacimiento" value="<?php echo $ObjDemo->getFechanacimiento(); ?>" 
    readonly />

    <br><br>
    
    <a href="index.php"> Cancelar </a>
	<a href="index.php"> Editar </a>
	
	<a href="index.php"> Eliminar </a>
    </p>
            </div>

        </div>




    </div>

   

    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/perfil.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/uploadPreview.min.js"></script>


<form action="actualizar.php" method="post">
  	<p>
  
    Id:<input type="text" name="iddemo" value="<?php echo $ObjDemo->getIdDemo(); ?>" 
    readonly />
    </p>

    

    <p>
    Nombre:<input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre(); ?>" 
    autofocus required />

    <br><br>
    <a href="index.php"> Cancelar </a>
    <br><br>
    <input type="submit" value="Guardar" />

    </p>
    
</form>

</body>