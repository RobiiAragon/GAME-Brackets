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

        <p class="myP">UTT</p>

        <p class="myP">El servicio de torneos de videojuegos es una página en donde los jugadores podrán inscribirse a torneos de tipo clasificación, en donde los participantes se puedan dar de alta, competir con otros jugadores y ganar premios, conforme avancen las rondas se hará el conteo de cuantas victorias y puntaje que tiene cada jugador, cuáles son sus estadísticas facilitando la previsualización de su desempeño como jugador. </p>


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