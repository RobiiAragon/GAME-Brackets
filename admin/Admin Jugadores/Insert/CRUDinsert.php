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

        <h2 class="myH2">CREATE</h2>

        <hearder>
        </hearder>

        <main>
          <section class="principal">
          </section>
          <section class="secundario">
            <form action="CRUDjugador.php" method="POST" enctype="multipart/form-data">
              <label for="duracion">Nombres del Jugador:</label>
              <br>
              <input type="text" name="first" required pattern="[A-Za-z ]*" maxlength="40" placeholder="Nombres" class="entradas">
              <br>
              <label for="duracion">Apellidos del Jugador:</label>
              <br>
              <input type="text" name="txtLastName" required pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ. ]*" maxlength="40" placeholder="Apellidos" class="entradas">
              <br>
              <label for="duracion">Nickname del Jugador:</label>
              <br>
              <input type="text" name="txtAlias" maxlength="40" required placeholder="Nickname(Apodo)" class="entradas">
              <br>
              <label for="duracion">Contraseña del Jugador:</label>
              <br>
              <input type="password" name="txtpassword" maxlength="15" placeholder="password" class="entradas">
              <br>
              <label for="txtnacionalidad">Nacionalidad:</label>
              <br>
              <select name="txtnacionalidad" id="txtnacionalidad">
                <option value="">--- ELige tu Nacionalidad ---</option>
                <option value="1">1.Brasil</option>
                <option value="2">2.Canada</option>
                <option value="3">3.China</option>
                <option value="4">4.India</option>
                <option value="5">5.Japon</option>
                <option value="6">6.Rusia</option>
                <option value="7">7.Korea del Sur</option>
                <option value="8">8.Reino Unido</option>
                <option value="9">9.Estados Unidos</option>
                <option value="10">10.Mexico</option>
              </select>
              <br>
              <input type="reset" value="cancel" class="button1">
              <input type="submit" value="update" class="button2">
            </form>
            <?php
            include_once("classinsert.php");
            ?>


          </section>
        </main>
        <br>
        </table>
        </body>

  </html>