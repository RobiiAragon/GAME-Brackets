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
                <li><a href="../FINAL/register.php">Registrate</a></li>
                <li><a href="../FINAL/iniciarsesion.php">Iniciar Sesion</a></li>
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

        <h2 class="myH2">Liga de videojuegos profesional online</h2>
        <head>
    <title> Ejercicio 2</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
  </head>
  <body>
   <hearder>
        <h1 class="centro">Encuesta</h1>
   </hearder>
   <main> 
       
             <h1>seccion principal</h1> 
             <section class="secundario form">
             <form action="upalumn.php" method="POST" enctype="multipart/form-data">
          
                <input type="text" name="textid"  pattern="[0-9]*" maxlength="5" required class="entradas" placeholder="ID Jugador">
           
             

               <input type="text" name="first" required pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ. ]*" maxlength="45" class="entradas" placeholder="Nombre(s)">
 
             

               <input type="text" name="txtLastName" required pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ. ]*" maxlength="50" class="entradas" placeholder="Apellido(s)" >

           
               
               <input type="text" name="inputAlias"  pattern="[A-Za-z áéíóúÁÉÍÓÚñÑ. ]*" required class="entradas" placeholder="Alias(Nickname)">
  
          
               <input type="password" name="textpassw"  pattern="[0-9]*" maxlength="8" required class="entradas" placeholder="Password">

               <input type="text" name="inputnad" maxlength="2" required class="entradas" placeholder="Nacionalidad(Solo Numeros)">
          
      
               <label id="update">Date update</label>

               <input type="reset" value="cancel" class="button1">
               <input type="submit" value="update" class="button2">
             </form>
             <?php
              include_once("alumnoupdate.php");
             ?>  
        </section>
    </main>
    <br>
  </body>
</html>
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

    <!-- Pie de pagia -->
    <?php require "./partials/footer.php" ?>
