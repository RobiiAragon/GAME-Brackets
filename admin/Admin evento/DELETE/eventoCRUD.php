<!DOCTYPE html>
<html lang="ES">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <center>
    <h2 class="myH2">Delete</h2>
    <p class="myH2">Eliminar un Evento</p>


<body>

  <hearder>
  </hearder>



  <!-- <?php //include('menu.php')
        ?>
   <?php
    // include('crudmenu.php')
    ?> -->

  <main>
    <section class="principal">
    </section>
    <section class="secundario">
      <form action="DELPOST.php" method="POST" enctype="multipart/form-data">

        <input type="text" name="txtid" required pattern="[0-9]*" maxlength="3" placeholder="ID Evento" class="entradas">


        <br>
        <input type="reset" value="Cancelar" class="button1">
        <input type="submit" value="Eliminar" class="button2">
      </form>
      <?php
      include_once("Delete.php");
      ?>
      </center>


    </section>
  </main>
  <br>
  </table>


  </div>