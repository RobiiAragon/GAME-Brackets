<html>
  <head>
    <title> grid</title>
  
    </style>
    <link rel="stylesheet" href="./Contene.css">
    <!-- <link rel="stylesheet" href="./estilo.css"> -->
  </head>
  <body>
   <hearder>
        <h1 class="centro">titulo principal</h1>
   </hearder>
   <nav>
      <a href="./grid.php">grid</a>
      <a href="./index.php">Back to menu</a>
   </nav>
   <main> 
        <section class="principal">
             <h1>seccion principal</h1> 
             <?php
              include_once("jugador.php");
              $myActor=new Jugadores();
              $dataset=$myActor->getAlljugador();
              if($dataset=="vacio"){
                echo "no hay datos";
              }else{
                echo "si hay datos";
                //tabla
                echo '<section id="grid">';
                 while ($fila=mysqli_fetch_assoc($dataset)) {
                   echo '<section>';
                   // print_r($film);
                   foreach($fila as $posicion =>$valor ){
                    //  echo '<br>';
                     echo '<br>';
                     echo $valor;
                   }
                   echo '<hr>';
                }
                echo '</section>';
              

                
              }

             ?>  
        </section>
    </main>
    <br>
  </body>
</html>
