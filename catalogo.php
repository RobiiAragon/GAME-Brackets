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


    <section class="home">
    </section>
    <div style="height: 1000px">
        <!-- just to make scrolling effect possible -->
        <h2 class="myH2">Catalogo</h2>
        <center>
        <div class="catalogo">
            <h1>Super Smash Bros Ultimate</h1>
            <a href="https://www.smashbros.com/es_ES/">
        <img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/games/256x/smash.png">
        </a>
        <h2>Super Smash Bros. Ultimate es un juego de lucha de plataformas
            para hasta ocho jugadores en el que los personajes de los juegos
            de Nintendo y otras franquicias de terceros deben intentar
            sacarse de la arena entre ellos. Cada jugador tiene un medidor
            de porcentaje, que aumenta cuando reciben daño, lo que aumenta el
            retroceso que reciben y facilita su lanzamiento en el aire y
            fuera de la arena.</h2>
        <h1>overwatch</h1>
        <a href="https://overwatch.blizzard.com/es-es/">
        <img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/games/256x/overwatch.png">
        </a>
        <h2>Overwatch es un juego de disparos en primera persona multijugador basado en equipos de 2016 de Blizzard Entertainment . El juego se lanzó por primera vez para PlayStation 4 , Xbox One y Windows en mayo de 2016 y para Nintendo Switch en octubre de 2019. El juego multiplataforma es compatible con todas las plataformas</h2>
        <h1>league of legends</h1>
        <a href="https://www.leagueoflegends.com/en-us/how-to-play/">
        <img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/games/256x/lol.png">
        </a>
        <h2>League of Legends (LoL), comúnmente conocido como League , es un videojuego de arena de batalla multijugador en línea de 2009 desarrollado y publicado por Riot Games . Inspirándose en Defense of the Ancients , un mapa personalizado para Warcraft III , los fundadores de Riot buscaron desarrollar un juego independiente del mismo género</h2>
        <h1>Counter strike Global Offensive</h1>
        <a href="https://blog.counter-strike.net/es/">
        <img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/games/256x/csgo.png">
        </a>
        <h2>Counter-Strike: Global Offensive (CS:GO) es un juego de disparos en primera persona táctico multijugador de 2012 desarrollado por Valve y Hidden Path Entertainment . Es el cuarto juego de la serie Counter-Strike . Desarrollado durante más de dos años, Global Offensive se lanzó para OS X , PlayStation 3 , Windows y Xbox 360 en agosto de 2012, y para Linux en 2014. Valve aún actualiza el juego con regularidad, con parches de equilibrio más pequeños y adiciones de contenido más grandes</h2>
        </center>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <?php require "./partials/footer.php" ?>