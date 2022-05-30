
<?php
$usuario = $_POST['user'];
$clave = $_POST['pasword'];

$db_txt = 'Datos.txt';
if(is_file($db_txt))
{
   $lineas = file($db_txt);
   foreach($lineas as $linea)
   {
      list($user,$pass) = explode(":",trim($linea),2);
      if(is_string($user)  &&  is_string($pass))
      {
        
        if($user == $usuario && $pass == $clave){
            header("location:operacion.php");

         }else if($user == $usuario && $pass!= $clave){
            echo "Contraseña incorrecta";
            
         }else if($user != $usuario && $pass== $clave){
            echo "usuario incorrecto";
         }
           
      }
   }
}
?>