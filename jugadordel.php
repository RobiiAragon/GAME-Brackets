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
        <h2 class="myH2">baneado </h2>
        <?php
 /*echo $_POST['first'];
 echo $_POST['txtLastName'];
 echo $_POST['txtAlias'];
 echo $_POST['txtpassword'];
 echo $_POST['txtnacionalidad'];*/

 include_once("insertudelete.php");
 $myJugador=new JugadoresDEL();
 $newid=$myJugador->DelJugador($_POST['txtid']);
 echo "<br>"; 
echo " Has eliminado un Jugador del Torneo por incumplir las normas". $newid;
 //echo $newid;

 /*header('Location: ./registro.php');*/
?>


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



