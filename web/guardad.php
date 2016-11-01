
<?php
$nombre= $_POST['nombre'];
$user= $_POST['usuario'];
$pass= $_POST['contraseña'];
$email= $_POST['email'];
$iden=$_POST['identificacion'];
$tipo=$_POST['tipo'];
$gravatar = md5($email);
$estado=0;

$conexion=pg_connect("host=localhost dbname=ejmplo2 user=postgres password=12345") or die ("error al conectar" .pg_last_error());
$verifica=strlen($nombre)*strlen($user)*strlen($pass)*strlen($email)*strlen($iden)*strlen($tipo);
if($verifica>0){

$query = "SELECT * FROM personas WHERE usuario='".$user."'" ;
    $res= pg_query($conexion, $query)or die ("ERROORRRR");
    
   if(pg_num_rows(@$res)>0){
        echo "<script>alert('El usuario ya existe')</script>";
        require("Registro.php");
    }else{
  $query="INSERT INTO personas (identificacion, nombre,usuario,contraseña,tipo,gravatar,email,stado) 
 values('".$iden."','".$nombre."','".$user."','".$pass."','".$tipo."','".$gravatar."','".$email."','".$estado."')" ;
 pg_query($conexion,$query);
 header("location:validar.php");
    }

 
 
}else{
    header("location:Registro.php");
}
?>