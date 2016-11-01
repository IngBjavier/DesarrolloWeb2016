<?php
$user= $_POST['usuario'];
$pass= $_POST['pass'];
$tipo= $_POST['tipo'];
$estado='0';
    

   // $mbd = new PDO('pgsql:host=localhost;dbname=ejmplo2', 'postgres', '12345');  
    //$mbd->query("INSERT INTO personas (nombre, apellidos, usuario, contraseña, Email) values('".$nombre."','".$pass."');");  
    //$mbd->query("DELETE FROM personas WHERE identificacion=''");
   // $consulta = "SELECT * from personas WHERE usuario='".$user."' and contraseña='".$pass."'";
   // $res = $mbd->query($consulta); 
$verifica=strlen($user)*strlen($pass)*strlen($tipo);
if($verifica>0){
    $conexion=pg_connect("host=localhost dbname=ejmplo2 user=postgres password=12345") or die ("error al conectar" .pg_last_error());
    $query = "SELECT * FROM personas WHERE usuario='".$user."' and contraseña='".$pass."' and tipo='".$tipo."' and stado='".$estado."'" ;
    $res= pg_query($conexion, $query)or die ("ERROORRRR");
    
   if(pg_num_rows(@$res)>0){
        header("location:perfil.php?var='".$user."'");
    }else{
        echo "<script>alert('Datos incorrectos')</script>";
       require('index.php');
    }
}else{
        
       header('location:index.php');  
}
   

    pg_close($conexion);
   
?>