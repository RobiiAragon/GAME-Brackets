    <!--Doctype-->
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <title>LVPO</title>
    <link rel="stylesheet" href="./partials/header.css">
    <link rel="stylesheet" href="./static/css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./static/css/bootsrap.css" />


    <body>
      <!-- partial:index.partial.html -->
      <nav class="nav">
        <div class="container">
          <div class="logo">
            <a href="./index.php">
              <img class="mr-2" src="./static/img/logo.png" />
          </div>
          </a>

        </div>
        <div id="mainListDiv" class="main_list">
          <ul class="navlinks">
            <li><a href="../FINAL/catalogo.php">Juegos</a></li>
            <li><a href="../FINAL/ranking.php">leaderboard</a></li>
            <li><a href="../FINAL/register.php">Registrate</a></li>
            <li><a href="../FINAL/iniciarsesion.php">Iniciar Sesion</a></li>
          </ul>
        </div>
      </nav>



      <section class="home">
      </section>
      <div style="height: 1000px">
        <!-- just to make scrolling effect possible -->
        <h2 class="myH2">Registrarse</h2>
        <!--aca va el formulario-->
        <div class="container pt-5">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">Registrarse</div>
                <div class="card-body">
                  <main>
                    <section class="principal">
                    </section>
                    <section class="secundario">
                      <form action="addjugador.php" method="POST" enctype="multipart/form-data">

                        <input type="text" name="first" required pattern="[A-Za-z ]*" maxlength="40" placeholder="Nombres" class="entradas">
                        <br>

                        <input type="text" name="txtLastName" required pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ. ]*" maxlength="40" placeholder="Apellidos" class="entradas">
                        <br>

                        <input type="text" name="txtAlias" maxlength="40" required placeholder="Nickname(Apodo)" class="entradas">
                        <br>

                        <input type="password" name="txtpassword" maxlength="15" placeholder="password" class="entradas">
                        <br>



                        <label for="txtnacionalidad">Elige tu nacionaldad:</label>
                        <br>
                        <select name="txtnacionalidad" id="txtnacionalidad">
                          <option value="1">Brazil</option>
                          <option value="2">Canada</option>
                          <option value="3">China</option>
                          <option value="4">India</option>
                          <option value="5">Japon</option>
                          <option value="6">Rusia</option>
                          <option value="7">Korea</option>
                          <option value="8">Reino unido</option>
                          <option value="9">Estados unidos</option>
                          <option value="10">Mexico</option>
                        </select>
<br>
                        <input type="reset" value="cancelar" class="button1">
                        <input type="submit" value="Registrarse" class="button2">
                      </form>
                      <?php
                      include_once("jugador.php");
                      ?>



                    </section>
                  </main>
                </div>
              </div>
            </div>
          </div>
        </div>




        <!-- Jquery needed -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="./partials/js/scripts.js"></script>

        <!-- Function used to shrink nav bar removing paddings and adding black background -->
        <script>
          $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
              $('.nav').addClass('affix');
              console.log("OK");
            } else {
              $('.nav').removeClass('affix');
            }
          });
        </script>

        <!--aca va la conexion con base de datos-->
        <!--aca va la conexion con base de datos esta es resiclada no sirve :(-->



        <!--aca el header y pie de pagina-->

        <body>
          <?php require "./partials/header.php" ?>
        </body>
        <?php require "partials/footer.php" ?>