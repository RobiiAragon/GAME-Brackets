<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <center>

<body>
  <hearder>
    <h1 class="container mt-4">READ</h1>
  </hearder>

  <main>
    <section class="cml-2">

      <?php
      include_once("../CREATE/evento.php");
      $myActor = new Evento();
      $dataset = $myActor->getAllEvento();

      if ($dataset == "vacio") {
        echo "no hay datos";
      } else {

        //tabla
        echo '<table border="1" color= "white">';
        while ($fila = mysqli_fetch_assoc($dataset)) {
          echo "<tr>";
          // print_r($film);
          foreach ($fila as $posicion => $valor) {
            //  echo '<br>';
            echo '<td>';
            echo $valor;
            echo '</td>';
          }
          echo "</tr>";
        }
        echo '</table>';
      }

      ?>
      </center>
  </main>
  <br>
</body>

</html>