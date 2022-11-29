<?php
 echo $_POST['first'];
 echo $_POST['txtLastName'];
 echo $_POST['txtAlias'];
 echo $_POST['txtpassword'];
 echo $_POST['txtnacionalidad'];


 include_once("jugador.php");
 $myJugador=new Jugadores();

 $newid=$myJugador->setJugador($_POST['first'],$_POST['txtLastName'],$_POST['txtAlias'],password_hash($_POST['txtpassword'], PASSWORD_DEFAULT),$_POST['txtnacionalidad']);
 echo $newid;


?>