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

<?php 
$usr=$_GET['var'];
$conexion=pg_connect("host=localhost dbname=ejmplo2 user=postgres password=12345") 
or die ("error al conectar" .pg_last_error());
$query = "select * from personas where usuario = $usr";
$result = pg_query($conexion,$query) or die('Query failed: ' . pg_last_error());

$rows = pg_numrows($result);
echo "<table width='700' height='300'   border='1' margin-left='100'>";
echo "<tbody><tr>";
echo "<td max-width='10'>";
echo "<img class='avatar avatar-70 grav-hashed grav-hijack alignleft'"; 
echo "id='grav-1465a431df9b656bf373d4d35ad406ea-0' ";
echo "style='margin-left: 30px; margin-right: 30px' ";
//mostrar los datos
for($i=1;$i<=$rows; $i++){
$line = pg_fetch_array($result, null, PGSQL_ASSOC);
echo "src='https://s.gravatar.com/avatar/$line[gravatar]'";
echo "width='300' height='300' />";
echo "</td>";
echo " <td max-width-width='10'>";
echo "<p>identidad: $line[identificacion]</p>";
echo "<p>usuario: $line[usuario]</p>";
echo "<p>email: $line[email]</p>";
echo "<p>tipo: $line[tipo]</p>";
echo "<p>email: $line[email]</p>";

echo "</tr>";
}

echo"</table>";

// Free resultset
pg_free_result($result);
// Closing connection
pg_close($conexion);
?> 
<br></br>
<button id="btn" onclick="window.location.href='index.php'">Inicio</button>




</form>
<br></br>

</section>
</body>
</html>
