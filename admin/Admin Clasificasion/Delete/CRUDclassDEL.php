<?php
 /*echo $_POST['first'];
 echo $_POST['txtLastName'];
 echo $_POST['inputEdad'];
 echo $_POST['inputEmail'];*/
 echo $_POST['txtcod'];
 include_once("classDEL.php");
 $myemp=new EmparejamientoDEL();

 $newid=$myemp->delClass($_POST['txtcod']);
//  echo $newid;

header('Location:./CRUDdel.php');
?>