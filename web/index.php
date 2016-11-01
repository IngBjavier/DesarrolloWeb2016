<!DOCTYPE html>
<html lang="es">
      
        <head>
        <meta charset="utf-8"/>
        <title>BIENVENIDO</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="all"/>
        <script src="js/script.js"></script>
        
      
        </head>
<head>
    <script type="text/javascript">
  </script>
<body>

  <h1>BIENVENIDO</h1>
 

      

  
    <fieldset><!--para crear un marco al formulario-->
      
        <form name="frm" method="POST" action="login.php">
        </br>
        <label for="usuario" >usuario:</label>
        <div>        
        <input type="text" style="width: 80%;" name="usuario" id="usuario" class="cambio" maxlength="20" placeholder="escriba su usuario"/> 
        </div>
        </br>
        <div>
        <label for="contraseña">contraseña:</label>
    </br>
         <input type="password" style="width: 80%;" name="pass" id="pass" class="cambio" maxlength="20" placeholder="escriba su contraseña"/> 
         </br>
         </br>
         <div class="radio"/ >
         <input type="radio" name="tipo" id="trbajador" value="Trabajador">
         <label for="trabajador">Trabajador</label>
     </br>
         <input type="radio" name="tipo" id="admin" value="Gerente">
         <label for="admin">Gerente</label>
         </div> 
       
<input type="hidden" name="rowIndex"><br>
<p><br></p>
<input type="submit" style="width: 80%;" name="addBtn" class="cambio" value="Iniciar sesion">
</br></br>
<input type="button" style="width: 80%;" name="addBtn" class="cambio" value="Registrarse" onclick="Registrar()">



</form>
<br></br>


          


</body>
</html>
