<script src="js/jquery.js"></script>
<?php
$usuario =$_POST['user'];
$password=$_POST['pasword'];
$db_txt = 'Datos.txt';
$respuesta="";
if(is_file($db_txt))
{
   $lineas = file($db_txt);
   foreach($lineas as $linea)
   {
      list($user,$pass) = explode(":",trim($linea),2);
      if(is_string($user)  &&  is_string($pass))
      {
         if($user == $usuario && $pass == $password){
            header("location:operacion.php");
         }else if($user == $usuario && $pass!= $password){
            $respuesta= "Contraseña No Coincide";
            header("location:index.php"); 
         }else if($user != $usuario && $pass== $password){
            $respuesta= "Usuario no Registrado";
            header("location:index.php"); 
         }else if ($user != $usuario && $pass != $password){
            $respuesta= "Datos Incorrectos";
            header("location:index.php"); 
         }
            
                
         
         
      }
   }
}
echo ($respuesta);