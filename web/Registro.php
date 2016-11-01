<!DOCTYPE html>
<html lang="es">
      
        <head>
        <meta charset="utf-8"/>
        <title>Formulario</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="all"/>
        <script src="js/script.js"></script>
         <script src="jquery-1.3.2.js"></script>
         <script src="js/verifica.js"></script>
        
      
        </head>
<head>
<body>

  <h1>FORMULARIO DE REGISTRO</h1>
 

      

  
    <fieldset><!--para crear un marco al formulario-->
        <form name="frm" method="POST" action="guardad.php" onsubmit="return add()">
        <div>

        <label for="nombre">Nombre:</label>
        </br>
        <input type="text" style="width: 80%;" name="nombre" id="nombre" class="cambio" maxlength="20" placeholder="escriba su nombre"> 
        </div>
        </br>
        <label for="identificacion" >Identificacion:</label>
        <div>       
        <input type="number" style="width: 80%;" name="identificacion" id="identificacion" class="cambio" maxlength="20" placeholder="escriba su identificacion"> 
        </div>
    </br>
        <div><div id="Info"></div>
         <label for="usuario">usuario:</label>
        </br>        
        <input type="text" style="width: 80%;" name="usuario" id="usuario" class="cambio" maxlength="20" placeholder="escriba su usuario" onchange="verifica()"/> 
        </div>       
        </br>
        <label for="contraseña">contraseña:</label>
         <div>
         <input type="password" style="width: 80%;" name="contraseña" id="contraseña" class="cambio" maxlength="20" placeholder="escriba su contraseña"/> 
        </br></br>
        <label for="email">E-mail:</label>
        <div>
        <input type="text" style="width: 80%;" name="email" id="email" class="cambio" maxlength="50" placeholder="example@example.com"/>
        </br>
        </br>
         <div class="radio"/ >
        <input type="radio"  name="tipo" id="trbajador" value="Trabajador">
         <label for="trabajador">Trabajador</label>
         <input type="radio"  name="tipo" id="admin" value="Gerente">
         <label for="admin">Gerente</label>
        </div>      
         
       
         </div> 
       
<input type="hidden" style="width: 80%;" name="rowIndex"><br>
<p><br></p>
<input type="submit"  name="addBtn" class="cambio" value="Registrar">
<br></br>
<a  href="index.php" style="width: 80%;" name="atras" class="cambio">Atras</a>



</form>
<br></br>


          


</body>
</html>