<Head>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <center>


      <section class="home">
      </section>
      <div style="height: 1000px">

        <h2 class="myH2">DELATE</h2>
  </head>

<body>




  <!-- <?php //include('menu.php')
        ?>
   <?php
    // include('crudmenu.php')
    ?> -->

  <main>
    <section class="principal">
    </section>
    <section class="secundario">
      <form action="Jugadordelete.php" method="POST" enctype="multipart/form-data">

        <input type="text" name="txtid" required pattern="[0-9]*" maxlength="3" placeholder="ID Jugador" class="entradas">

        <br>

        <input type="reset" value="cancel" class="button1">
        <input type="submit" value="update" class="button2">
      </form>
      <?php
      include_once("classdelete.php");
      ?>



    </section>
  </main>
  <br>
  </table>
  <!-- <script src="logic/popup.js"></script> -->
</body>

</html>