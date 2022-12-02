<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LVPO</title>
    <!-- Conexiones -->
    <link rel="stylesheet" href="./static/css/style.css">
    <link rel="stylesheet" href="./static/css/login.css">
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

    <div style="height: 1000px">
        <h2 class="myH2">Admin</h2>
        <section class="secundario">
             <form action="validar.php" method="POST" enctype="multipart/form-data">      
               <input type="text" name="Alias" maxlength="40" required placeholder="Nickname" class="container">
                        
               <input type="password" name="password" minlength="5" maxlength="50" placeholder="password" class="container">

               <button type="submit">Login</button>
               <input type="reset" value="cancel" class="cancelbtn">

             </form>
          </section>
    </main>
    <br>

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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
    <div class="Copyright"> Copyright® 2022, Liga Profesional de Videojuegos Online Universidad Tecnologica de Tijuana, Docencia 1, 3roC, Equipo 7</div>
</footer>

</html>