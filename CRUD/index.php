<?php
require_once("class/class.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" type="text/css" href="css/stilos.css" media="all"/>

<title>CRUD </title>
<script type="text/javascript">
function eliminar(url)
{
    if(confirm("Realmente desea eliminar este registro?"))
    {
        window.location=url;
    }
}
</script>

</head>

<body>
    <h2>USUARIOS</h2>
<div style="border: 1pt solid #fbb; text-align: center;">

<table class="centrada">
     <tr>
        <td align="rigth" colspan="5"><a href="add.php">INGRESAR USUARIO</a><hr/></td>
    </tr>
    <h2></h2>

   

    <tr style="font-weight: bold; color:#ffffff; background-color:#000000; border-radius=0;">
        
        <td>NOMBRE</td>
        <td>USUARIO</td>
        <td>CONTRASEÑA</td>
        <td>EDITAR</td>
        <td>ELIMINAR</td>
    </tr>

    <?php
    $Des= new Desarrollo();
    $datos=$Des->get_usuario();
    for($i=0;$i<sizeof($datos);$i++)
    {
    ?>
  
    <tr style="background-color: #f0f0f0;">
        <td><?php echo $datos[$i]["nombre"];?></td>
        <td><?php echo $datos[$i]["usuario"];?></td>
        <td><?php echo $datos[$i]["contraseña"];?></td>
      <td><a href="edit.php?id=<?php echo $datos[$i]["id"];?>" title="Editar <?php echo $datos[$i]["titulo"];?>">Editar</a></td>
        <td><a href="javascript:void(0);" title="Eliminar <?php echo $datos[$i]["titulo"];?>" onclick="eliminar('eliminar.php?id=<?php echo $datos[$i]["id"];?>');">Eliminar</a></td>
        
        
    </tr>
   <?php
    }
    ?>
    
   
</table>
</div>

</body>
</html>
