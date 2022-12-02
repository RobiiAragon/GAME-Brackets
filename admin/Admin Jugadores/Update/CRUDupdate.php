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
        <section class="secundario form">
          <form action="CRUDupjugador.php" method="POST" enctype="multipart/form-data">
            <label for="UPduracion">Inserta el ID del Jugador a Editar:</label>
            <br>
            <input type="text" name="textid" pattern="[0-9]*" maxlength="5" required class="entradas" placeholder="ID Jugador">
            <br>
            <label for="UPduracion">Nombres del Jugador:</label>
            <br>
            <input type="text" name="first" required pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ. ]*" maxlength="45" class="entradas" placeholder="Nombre(s)">
            <br>
            <label for="UPduracion">Apellidos del Jugador:</label>
            <br>
            <input type="text" name="txtLastName" required pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ. ]*" maxlength="50" class="entradas" placeholder="Apellido(s)">
            <br>
            <label for="UPduracion">Nickname del Jugador:</label>
            <br>
            <input type="text" name="inputAlias" pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ. ]*" required class="entradas" placeholder="Alias(Nickname)">
            <br>
            <label for="UPduracion">Contraseña del Jugador:</label>
            <br>
            <input type="password" name="textpassw" pattern="[0-9]*" maxlength="8" required class="entradas" placeholder="Password">
            <br>
            <label for="inputnad">Nacionalidad:</label>
            <br>
            <select name="inputnad" id="inputnad">
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
            <button type="submit">Update</button>
            <input type="reset" value="cancel" class="cancelbtn">
          </form>
          <?php
          include_once("classupdate.php");
          ?>
        </section>
        </main>
        <br>
        </body>

  </html>