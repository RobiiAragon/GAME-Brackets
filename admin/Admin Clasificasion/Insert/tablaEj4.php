<Head>
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

        <h2 class="myH2">READ</h2>
   <main> 
        <section class="secundario form">
             <h1>seccion principal</h1> 
             <?php
              include_once("class.php");
              $myActor=new Emparejamiento();
              $dataset=$myActor->getAllPlayer();
              
              if($dataset=="vacio"){
                echo "no hay datos";
              }else{
                echo "si hay datos";
                //tabla
                echo '<table border="1">';
                 while ($fila=mysqli_fetch_assoc($dataset)) {
                   echo "<tr>";
                   // print_r($film);
                   foreach($fila as $posicion =>$valor ){
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
  </body>
</html>
