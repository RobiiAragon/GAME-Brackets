<?php
 /*echo $_POST['first'];
 echo $_POST['txtLastName'];
 echo $_POST['inputEdad'];
 echo $_POST['inputEmail'];*/
 echo $_POST['textid'];

 include_once("classupdate.php");
 $myJugador=new JugadoresUPD();

 $newid=$myJugador->updJugador($_POST['textid'],$_POST['first'],$_POST['txtLastName'],$_POST['inputAlias'],password_hash($_POST['textpassw'], PASSWORD_DEFAULT),$_POST['inputnad']);
//  echo $newid;

header('Location:../Update/CRUDupdate.php');

?>