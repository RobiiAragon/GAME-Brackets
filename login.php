    <!--Doctype-->
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <title>LVPO</title>
    <link rel="stylesheet" href="./partials/header.css">
    <link rel="stylesheet" href="./static/css/style.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./static/css/bootsrap.css" />
    <body>
      <!-- partial:index.partial.html -->
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
  <!--Home (Login y main page)-->
  <?php

  require "conexionDB.php";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
      $error = "Please fill all the fileds.";
    } else if (!str_contains($_POST["email"], "@")) {
      $error = "Email format is incorrect.";
    } else {
      $statement = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
      $statement->bindParam(":email", $_POST["email"]);
      $statement->execute();

      if ($statement->rowCount() == 0) {
        $error = "Invalid credentials.";
      } else {
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        if (!password_verify($_POST["password"], $user["password"])) {
          $error = "Invalid credentials.";
        } else {
          session_start();

          unset($user["password"]);

          $_SESSION["user"] = $user;

          header("Location: home.php");
        }
      }
    }
  }
?>


  <div class="container pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Login</div>
          <div class="card-body">
            <?php if ($error) : ?>
              <p class="text-danger">
                <?= $error ?>
              </p>
            <?php endif ?>
            <form method="POST" action="login.php">
              <div class="mb-3 row">
                <label for="txtAlias" class="col-md-4 col-form-label text-md-end">Username o Nickname</label>

                <div class="col-md-6">
                  <input id="txtAlias" type="txtAlias" class="form-control" name="txtAlias" autocomplete="txtAlias" autofocus>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="txtpassword" class="col-md-4 col-form-label text-md-end">Password</label>

                <div class="col-md-6">
                  <input id="txtpassword" type="password" class="form-control" name="txtpassword" autocomplete="txtpassword" autofocus>
                </div>
              </div>

              <div class="mb-3 row">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">Iniciar sesion</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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

        <!--aca va la conexion con base de datos-->
        <!--aca va la conexion con base de datos esta es resiclada no sirve :(-->



        <!--aca el header y pie de pagina-->

        <body>
          <?php require "./partials/header.php" ?>
        </body>
        <?php require "partials/footer.php" ?>