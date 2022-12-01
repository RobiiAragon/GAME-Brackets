<?php
 echo $_POST['txtPosc'];
 echo $_POST['txtPuntaje'];
 echo $_POST['txtJuego'];
 echo $_POST['inputAlias'];

 include_once("class.php");
 $myemp=new Emparejamiento();

 $newid=$myemp->setEMP($_POST['txtPosc'],$_POST['txtPuntaje'],$_POST['txtJuego'],$_POST['inputAlias']);
 echo $newid;
?>