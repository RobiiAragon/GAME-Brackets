<?php

$usuario=$_POST['Alias'];
$password=$_POST['password'];
session_start();

$_SESSION['Alias']=$usuario;

include('DB.php');

$consulta ="SELECT *FROM admin where Alias= '$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header('Location:./Home/homeadmin.php');

}else{
   echo '<div class="alert alert-danger"> LOS CAMPOS ESTAN INCORRECTOS</div>';
}

mysqli_free_result($resultado);
mysqli_close($conexion);
