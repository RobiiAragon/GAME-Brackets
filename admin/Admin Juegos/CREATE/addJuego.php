<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css"
    integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
      

        <?php
 echo $_POST['codigo'];
 echo $_POST['nombre_juego'];
 echo $_POST['generos'];



 include_once("Juego.php");
 $myjuego=new Juego();

 $newid=$myjuego->setjuegos($_POST['codigo'],$_POST['nombre_juego'],$_POST['generos']);
 echo $newid;
 header('Location:./JuegoCRUD.php');

?>

    </div>

