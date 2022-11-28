    <!--Doctype-->
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>LVPO</title>
<link rel="stylesheet" href="./partials/navbar.css">
<link rel="stylesheet" href="./partials/header.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!--Estilos y scripts-->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/darkly/bootstrap.min.css"
    integrity="sha512-ZdxIsDOtKj2Xmr/av3D/uo1g15yxNFjkhrcfLooZV5fW0TT7aF7Z3wY1LOA16h0VgFLwteg14lWqlYUQK3to/w=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  <script
    defer
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>

    <!--require con el navbar o menu-->
<header>
<nav>
<?php require "./partials/navbar.php" ?>
</nav>
</head>
    <!--aca va la conexion con base de datos esta es resiclada no sirve :(-->
<?php
require "database.php";
$error = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"])) {
    $error = "Por favor rellena todos los campos.";
  } else if (!str_contains($_POST["email"], "@")) {
    $error = "El formato del correo es incorrecto.";
  } else {
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $statement->bindParam(":email", $_POST["email"]);
    $statement->execute();

    if ($statement->rowCount() > 0) {
      $error = "Este correo ya esta en uso.";
    } else {
      $conn
        ->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)")
        ->execute([
          ":name" => $_POST["name"],
          ":email" => $_POST["email"],
          ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT),
        ]);

      $statement = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
      $statement->bindParam(":email", $_POST["email"]);
      $statement->execute();
      $user = $statement->fetch(PDO::FETCH_ASSOC);

      session_start();
      $_SESSION["user"] = $user;

      header("Location: home.php");
    }
  }
}
?>

    <!--aca va el formulario-->
<div class="container pt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Registrarse</div>
        <div class="card-body">
          <?php if ($error) : ?>
            <p class="text-danger">
              <?= $error ?>
            </p>
          <?php endif ?>
          <br>
          <form method="POST" action="register.php">
            <div class="mb-3 row">
              <label for="name" class="col-md-4 col-form-label text-md-end">Nickname</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" autocomplete="name" autofocus>
              </div>
            </div>
          <form method="POST" action="register.php">
            <div class="mb-3 row">
              <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" autocomplete="name" autofocus>
              </div>
            </div>
            <form method="POST" action="register.php">
            <div class="mb-3 row">
              <label for="name" class="col-md-4 col-form-label text-md-end">Apellidos</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" autocomplete="name" autofocus>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" autocomplete="password" autofocus>
              </div>
            </div>

            <div class="mb-3 row">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--aca el header y pie de pagina-->
<body>
<?php require "./partials/header.php" ?>
</body>
<?php require "partials/footer.php" ?>