<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LVPO</title>
    <!-- Conexiones -->
    <link rel="stylesheet" href="./static/css/style.css">
</head>

<body>
    <!-- NAVbar LOGO -->
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="./index.php">
                    <img class="mr-2" src="./static/img/logo.png" />
            </div>
            </a>
            <!-- NAVbar menu -->
        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="../FINAL/catalogo.php">Juegos</a></li>
                <li><a href="../FINAL/ranking.php">leaderboard</a></li>
                <li><a href="../FINAL/logout.php">Cerrar Sesion</a></li>
            </ul>
        </div>
        <span class="navTrigger">
            <i></i>
            <i></i>
            <i></i>
        </span>
        </div>
    </nav>
    </div>
    <!--END NAVbar menu -->
    <!--Home (informacion y main page)-->
    <section class="home">
    </section>
    <div style="height: 1000px">
        <!-- just to make scrolling effect possible -->
        <h2 class="myH2">Tabla de clasificaciones</h2>
        <p class="myP">Top 10 mundial Smash Bros</p>
        <p class="myP">UTT</p>
        <main> 
        <section class="secundario form">
             <?php
              include_once("class.php");
              $myActor=new Emparejamiento();
              $dataset=$myActor->getAllPlayer();
              
              if($dataset=="vacio"){
                echo "no hay datos";
              }else{

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

  

  </div>




    <!--Conexion con animaciones y funcionalidad del carrusel y del navbar-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./partials/js/scripts.js"></script>

    <!-- Función utilizada para reducir la barra de navegación, eliminar el relleno y agregar un fondo negro -->
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

    <!-- Función utilizada para reducir la barra de navegación, eliminar el relleno y agregar un fondo negro -->
    <?php require "./partials/footer.php" ?>