<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LVPO</title>
    <link rel="stylesheet" href="./static/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./static/css/bracket.css">



    <!-- partial:index.partial.html -->
    <nav class="nav">
        <div class="container">
            <div class="logo">
                <a href="./Home/home.php">
                    <img class="mr-2" src="./static/img/logo.png" />

            </div>
            </a>
</head>


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



<section class="home">
</section>
<div style="height: 1000px">
    <!-- just to make scrolling effect possible -->
    <h2 class="myH2">Liga de videojuegos profesional online</h2>
    <p class="myP">UTT</p>

    </section>

    <body>
        <div class="bracket">
            <section class="round quarterfinals">
                <div class="winners">
                    <div class="matchups">
                        <div class="matchup">
                            <div class="participants">
                                <div class="participant winner"><span>1ro<tr> Auronplay</tr></span></div>
                                <div class="participant"><span>8vo<tr> Zero</tr></span></div>
                            </div>
                        </div>
                        <div class="matchup">
                            <div class="participants">
                                <div class="participant"><span>7mo<tr> Lulux</tr></span></div>
                                <div class="participant winner"><span>3ro<tr> Daniel</tr></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="connector">
                        <div class="merger"></div>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="winners">
                    <div class="matchups">
                        <div class="matchup">
                            <div class="participants">
                                <div class="participant"><span>6to<tr> Al3x4nd3r</tr></span></div>
                                <div class="participant winner"><span>2do<tr> Daniel</tr></span></div>
                            </div>
                        </div>
                        <div class="matchup">
                            <div class="participants">
                                <div class="participant"><span>5to<tr> NONAME</tr></span></div>
                                <div class="participant winner"><span>4to<tr> Chavezzzz</tr></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="connector">
                        <div class="merger"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </section>
            <section class="round semifinals">
                <div class="winners">
                    <div class="matchups">
                        <div class="matchup">
                            <div class="participants">
                                <div class="participant winner"><span>1ro<tr> Auronplay</tr></span></div>
                                <div class="participant"><span>3ro<tr> Daniel</tr></span></div>
                            </div>
                        </div>
                        <div class="matchup">
                            <div class="participants">
                                <div class="participant winner"><span>2do<tr> Daniel</tr></span></div>
                                <div class="participant"><span>4to<tr> Chavezzzz</tr></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="connector">
                        <div class="merger"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </section>
            <section class="round finals">
                <div class="winners">
                    <div class="matchups">
                        <div class="matchup">
                            <div class="participants">
                                <div class="participant winner"><span>1ro<tr> Auronplay</tr></span></div>
                                <div class="participant"><span>2do<tr> Daniel</tr></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

</div>
</body>

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