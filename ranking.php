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
                <li><a href="../FINAL/login.php">Iniciar Sesion</a></li>
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
        <p class="myP"></p>
        <p class="myP"></p>

        <p class="myP">

            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
        </p>
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