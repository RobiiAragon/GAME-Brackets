<?php
 /*echo $_POST['first'];
 echo $_POST['txtLastName'];
 echo $_POST['inputEdad'];
 echo $_POST['inputEmail'];*/
 echo $_POST['txtid'];

 include_once("classupdate.php");
 $myemp=new EmparejamientoUPD();

 $newid=$myemp->updClass($_POST['txtid'],$_POST['txtPosc'],$_POST['txtPuntaje'],$_POST['txtJuego'],$_POST['inputAlias']);
//  echo $newid;

header('Location:./CRUDUpdate.php');
?>