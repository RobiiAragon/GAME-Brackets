<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>LVPO</title>
<link rel="stylesheet" href="./partials/navbar.css">
<link rel="stylesheet" href="./partials/header.css">

<header>
<nav>
<?php require "./partials/navbar.php" ?>
</nav>
</head>

      <?php

      require "database.php";

      $error = null;

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
                    <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" autocomplete="email" autofocus>
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



      <body>
        <?php require "partials/header.php" ?>
      </body>
      <?php require "partials/footer.php" ?>