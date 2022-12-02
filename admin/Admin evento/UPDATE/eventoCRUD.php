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
              <div class="card-header">Actualizar un Evento</div>
              <div class="card-body">
                <main>
                  <section class="principal">
                  </section>
                  <section class="secundario">
                    <form action="upevento.php" method="POST" enctype="multipart/form-data">
                      <label for="UPduracion">Inserta el ID del Evento a Editar:</label>
                      <br>
                      <input type="text" name="idevento" maxlength="40" placeholder="ID del evento" class="entradas">
                      <br>
                      <label for="UPduracion">Nombre del Evento:</label>
                      <br>
                      <input type="text" name="UPnombreevento" required pattern="[A-Za-z ]*" maxlength="40" placeholder="Nombre" class="entradas">
                      <br>
                      <label for="UPduracion">Fecha del Evento:</label>
                      <br>
                      <input type="date" name="UPfecha" required placeholder="Duracion" class="entradas">
                      <br>

                      <label for="UPduracion">Duracion del Evento:</label>
                      <br>
                      <select name="UPduracion" id="UPduracion">
                        <option value="08:00 A.M - 10:00 A.M">08:00 A.M - 10:00 A.M</option>
                        <option value="10:00 A.M - 12:00 P.M">10:00 A.M - 12:00 P.M</option>
                        <option value="12:00 P.M - 02:00 P.M">12:00 P.M - 02:00 P.M</option>
                        <option value="02:00 P.M - 04:00 P.M">02:00 P.M - 04:00 P.M</option>
                        <option value="04:00 P.M - 06:00 P.M">04:00 P.M - 06:00 P.M</option>
                        <option value="06:00 P.M - 08:00 P.M">06:00 P.M - 08:00 P.M</option>
                      </select>
                      <br>

                      <label for="UPtipo_evento">Tipo de Evento:</label>
                      <br>
                      <select name="UPtipo_evento" id="UPtipo_evento">
                        <option value="1">Equipos de 4</option>
                        <option value="2">Equipos de 5</option>
                        <option value="3">Individual</option>
                      </select>
                      <br>
                      <label for="UPjuegos">Juego:</label>
                      <br>
                      <select name="UPjuegos" id="UPjuegos">
                        <option value="Smash Bros Ultimate">Smash Bros Ultimate</option>
                        <option value="Overwatch">Overwatch</option>
                        <option value="League of Legends">League of Legends</option>
                        <option value="Counter Strike">Counter Strike</option>
                      </select>
                      <br>
                      <br>

                      <input type="reset" value="cancelar" class="button1">
                      <input type="submit" value="Actualizar" class="button2">
                    </form>
                    <?php
                    include_once("Evento.php");
                    ?>



                  </section>
                </main>
              </div>
            </div>
          </div>
        </div>
      </div>


  </center>