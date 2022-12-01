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
                <li><a href="../FINAL/Brackets.php">Brackets</a></li>
                <li><a href="../FINAL/Perfiljugador.php">Perfil</a></li>
                <li><a href="../FINAL/iniciarsesion.php">Cerrar Sesion</a></li>


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
       

        <body>
<table border="1" class="hola" align:right;>
            <tr>
                <th>Numero </th>
                <th>Nacionalidad</th>
             
            </tr>
            <tr>
                <td>Leire</td>
                <td>Bravo</td>
              
           
            <tr>
                <td>Ainara</td>
                <td>Feijoo</td>
           
            <tr>
                <td>Nancy</td>
                <td>Tomas</td>
            </tr>
</table>
<hearder>
   </hearder>



   <!-- <?php //include('menu.php')?>
   <?php
    // include('crudmenu.php')
   ?> -->

   <main>
        <section class="principal">
        </section>
        <section class="secundario">
             <form action="jugadordel.php" method="POST" enctype="multipart/form-data">

             <input type="text" name="txtid" required pattern="[0-9]*"  maxlength="3" placeholder="ID Jugador" class="entradas">  
           


               <input type="reset" value="cancel" class="button1">
               <input type="submit" value="update" class="button2">
             </form>
             <?php
              include_once("insertudelete.php");
             ?> 



          </section>
    </main>
    <br>
</table>


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
