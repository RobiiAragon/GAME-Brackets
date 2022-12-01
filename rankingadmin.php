<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LVPO</title>
    <link rel="stylesheet" href="./static/css/style.css">
  
</head>

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


    <section class="home">
    </section>
    <div style="height: 1000px">
        <!-- just to make scrolling effect possible -->
        <h2 class="myH2">Inicio</h2>
        <p class="myP">El servicio de torneos de videojuegos es una página en donde los jugadores podrán inscribirse a torneos de tipo clasificación, en donde los participantes se puedan dar de alta, competir con otros jugadores y ganar premios, conforme avancen las rondas se hará el conteo de cuantas victorias y puntaje que tiene cada jugador, cuáles son sus estadísticas facilitando la previsualización de su desempeño como jugador. </p>

  <head>
    <title> Ejercicio 2</title>
    <link rel="stylesheet" href="style/main.css" type="text/css">
  </head>
  <body>
   <hearder>
        
   </hearder>
   <section class="secundario form">
             <h1>seccion principal</h1> 
           
             <form action="addclass.php" method="POST" enctype="multipart/form-data">

             
               <input type="text" name="txtPosc" required  maxlength="25" placeholder="Posiciones" class="entradas">
  
               <input type="text" name="txtPuntaje" required pattern="[0-9]*" maxlength="20" placeholder="puntaje" class="entradas">
          
               <label for="txtnacionalidad">Elige tu nacionaldad:</label>
                        <br>
                        <select name="txtJuego" id="txtJuego">
                          <option value="1">Super smash Bros</option>
                          <option value="2">Overwatch</option>
                          <option value="3">Legue of legends</option>
                          <option value="4">Counter Strike Global offensive</option>
                        </select>

   
               <input type="text" name="inputAlias" maxlength="40" required placeholder="Alias" class="entradas">
  
               <label id="update">Date update</label>

               <input type="reset" value="cancel" class="button1">
               <input type="submit" value="update" class="button2">
             </form>
             <?php
              include_once("class.php");
             ?>  
        </section>
    </main>
    <br>
  </body>


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


<?php require "./partials/footer.php" ?>
