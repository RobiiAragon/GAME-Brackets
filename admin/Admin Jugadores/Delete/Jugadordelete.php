<?php
 /*echo $_POST['first'];
 echo $_POST['txtLastName'];
 echo $_POST['txtAlias'];
 echo $_POST['txtpassword'];
 echo $_POST['txtnacionalidad'];*/

 include_once("classdelete.php");
 $myJugador=new JugadoresDEL();
 $newid=$myJugador->DelJugador($_POST['txtid']);
 echo "<br>"; 
echo " Has eliminado un Jugador del Torneo por incumplir las normas". $newid;
 //echo $newid;

 header('Location:../Delete/CRUDdelete.php');
?>



