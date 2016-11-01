<?php
require_once("class/class.php");
 $Des= new Desarrollo();
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
    $Des->add();
    exit;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/estilos.css" media="all"/>
<title>CRUD</title>
</head>

<body>




<h1>CREAR NUEVO USUSARIO</h1>
  
<form name="form" action="" method="post" >
 
    <fieldset><!--para crear un marco al formulario-->


    <div>
     <label for="nombre">nombre:</label>
     <input type="text" name="nombre" id="nombre" class="cambio" > 
    </div>
    <br></br>
    <div>
    <label for="usuario">usuario:</label>
    <input type="text" name="usuario" id="usuario" class="cambio" > 
    </div>
    <br></br>
    <div>
    <label for="contraseña">contraseña:</label>
    <input type="password" name="contraseña" id="contraseña" class="cambio" > 
    </div>
    <br></br>
    <?php
if(isset($_GET["m"]))
{
    switch($_GET["m"])
    {
        case '1':
            ?>
            <h4 style="color: red;">Los datos están vacíos</h4>
            <?php
        break;
        case '2':
            ?>
            <h4 style="color: green;">usuario agregado con exito</h4>
            <?php
        break;
    }
}
?>




      <hr />
    <input type="hidden" name="grabar" value="si" />
    <input type="submit" value="Crear" title="Crear" /> <a href="index.php" title="Volver Atrás" >Volver Atrás</a>
</br>
</br>
   


</form>


</body>
</html>
