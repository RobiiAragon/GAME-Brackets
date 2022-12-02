<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LVPO</title>
    <link rel="stylesheet" href=".././static/css/style.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="homeadmin.php">
                    <img class="mr-2" src="../static/img/logo.png" />
            </div>
            </a>

        </div>
        <div id="mainListDiv" class="main_list">
            <ul class="navlinks">
                <li><a href="../admin/Admin Jugadores/jugadores.php">Admin Jugadores</a></li>
                <li><a href="../admin/Admin evento/evento.php">Admin Eventos</a></li>
                <li><a href="../admin/Admin Juegos/juegos.php">Admin Juegos</a></li>
                <li><a href="../admin/Admin example/example.php">Admin Example</a></li>
                <li><a href="../iniciarsesionadmin.php">Cerrar Sesion</a></li>


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
        <h2 class="myH2">Sesion de Administrador</h2>




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


    <footer>
        <div class="Copyright"> Copyright® 2022, Liga Profesional de Videojuegos Online Universidad Tecnologica de Tijuana, Docencia 1, 3roC, Equipo 7</div>
    </footer>

</html>