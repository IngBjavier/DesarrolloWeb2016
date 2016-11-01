<?php
require_once("class/class.php");
$Des=new Desarrollo();
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
    $Des->edit();
    exit;
}
$datos=$Des->get_noticia_por_id($_GET["id"]);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/estilos.css" media="all"/>
<title>CRUD</title>
</head>

<body>


<h1>EDITAR USUSARIO</h1>
  


<form name="form" action="" method="post">
    
    <fieldset><!--para crear un marco al formulario-->
    <div>
        <h2>Nombre: <?php echo $datos[0]["nombre"];?></h2>
        <br></br>
    </div>
    <div>
        nombre : <input type="text" name="nombre" value="<?php echo $datos[0]["nombre"];?>"/>
    <br></br>
    </div>
    <div>
        usuario :<input type="text" name="usuario" value="<?php echo $datos[0]["usuario"];?>"/>
    <br></br>
    </div>
    <div>        
        contraseña :<input type="password" name="contraseña" value="<?php echo $datos[0]["contraseña"];?>"/>
    <br></br>
    </div>
    
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
            <h4 style="color: green;">usuario editado exitosamente</h4>
            <?php
        break;
    }
}
?>
    <hr />
    <input type="hidden" name="grabar" value="si" />
    <input type="hidden" name="id"  value="<?php echo $_GET["id"];?>" />
    <input type="submit" value="Editar" title="Editar" /> <a href="index.php" title="Volver Atrás">Volver Atrás</a>
</form>

</body>
</html>
