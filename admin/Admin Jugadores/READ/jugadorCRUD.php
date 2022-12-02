<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="css/main.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css" integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <center>


<h1>READ</h1>

    <?php
    include_once("classinsert.php");
    $myActor = new Jugadores();
    $dataset = $myActor->getAllJugador();

    if ($dataset == "vacio") {
      echo "no hay datos";
    } else {
      echo "si hay datos";
      //tabla
      echo '<table border="5">';

      while ($fila = mysqli_fetch_assoc($dataset)) {
        echo '<td>';
        echo "<tr>";
        echo "<tr>";
        foreach ($fila as $posicion => $valor) {
          echo "<td><br>[" . $posicion . "]</td>";
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



    </section>
    </main>
    <br>
    </table>
    </body>

</html>