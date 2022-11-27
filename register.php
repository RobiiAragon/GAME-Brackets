<?php

require "database.php";

$error = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"]) || empty($_POST["user"]) || empty($_POST["email"]) || empty($_POST["password"])) {
    $error = "Please fill all the fileds.";
  } else if (!str_contains($_POST["email"], "@")) {
    $error = "Email format is incorrect.";
  } else {
    $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $statement->bindParam(":email", $_POST["email"]);
    $statement->execute();

    if ($statement->rowCount() > 0) {
      $error = "This email is taken.";
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

      header("Location: index.php");
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>LVPO</title>
<style>
  <?php include './partials/static/CSS/styles.css'; ?>
</style>
<?php require "./partials/navbar.php" ?>
<link rel="stylesheet" href="./partials/static/CSS/normalize.css">

<body>

  <div class="card-header">Register</div>
  <div class="card-body">
    <?php if ($error) : ?>
      <p class="text-danger">
        <?= $error ?>
      </p>
    <?php endif ?>
    <form method="POST" action="register.php">
      <div class="mb-3 row">
        <label for="name" class="col-md-4 col-form-label text-md-end">Full Name</label>

        <div class="col-md-6">
          <input id="name" type="text" class="form-control" name="name" autocomplete="name" autofocus>
        </div>
      </div>

      <label for="name" class="col-md-4 col-form-label text-md-end">Userame</label>
      <div class="col-md-6">
        <input id="user" type="text" class="form-control" name="user" autocomplete="user" autofocus>
      </div>
  </div>

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

  <br>
  <?php require "./partials/header.php" ?>


  <?php require "./partials/footer.php" ?>