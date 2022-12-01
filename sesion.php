<?php
  session_start();


  if(isset($_SESSION['Alias'])){
      $menuJugador=true;
      $usuario='welcome'.$_SESSION['Alias'];
  }else{
      $menuJugador=false;
      $usuario='';
  }
  

?>