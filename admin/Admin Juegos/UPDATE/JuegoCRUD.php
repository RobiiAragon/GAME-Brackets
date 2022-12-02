<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <center>

    <section class="home">
    </section>
    <div style="height: 1000px">
      <!-- just to make scrolling effect possible -->
      <h2 class="myH2">Update</h2>
      <!--aca va el formulario-->
      <div class="container pt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">Actualizar un Juego</div>
              <div class="card-body">
                <main>
                  <section class="secundario">
                    <form action="upjuegos.php" method="POST" enctype="multipart/form-data">
                      <label for="UPgenero">Inserta el ID del Juego a Editar:</label>
                      <br>
                      <input type="text" name="idjuego" maxlength="40" placeholder="ID del Juego" class="entradas">
                      <br>
                      <label for="UPgenero">Nombre del Juego:</label>
                      <br>
                      <input type="text" name="UPnombrejuego" required pattern="[A-Za-z ]*" maxlength="40" placeholder="Nombre" class="entradas">
                      <br>
                      <label for="UPgenero">Genero del Juego:</label>
                      <br>
                      <select name="UPgenero" id="UPgenero">
                        <option value="1">Peleas</option>
                        <option value="2">Shooter</option>
                        <option value="3">MOBA</option>
                      </select>
                      <br>
                      <input type="reset" value="cancelar" class="button1">
                      <input type="submit" value="Actualizar" class="button2">
                    </form>
                    <?php
                    include_once("Juego.php");
                    ?>



                  </section>
                </main>
              </div>
            </div>
          </div>
        </div>
      </div>


  </center>