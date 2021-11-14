<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style media="screen">
      label {
        display: inline-block;
        width: 80px;
        padding: 5px;
      }
      button {
        margin: 5px;
      }
      .error {
        padding-left: 10px;
        color: red;
      }
    </style>

    <title>Login Form</title>
  </head>
  <body>
    <?php
      //require "functions.php";
      require "DBFunctions.php";

      $username = "";
      $password = "";
      $error = "";

      if ($_SERVER["REQUEST_METHOD"] === "GET") {
        if (isset($_COOKIE["username"])) {
          $username = $_COOKIE["username"];
        }
        else {
          $username = "";
        }
        if (isset($_COOKIE["password"])) {
          $password = $_COOKIE["password"];
        }
        else {
          $password = "";
        }
      }

      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (!empty($_POST['username'])) {
          $username = $_POST['username'];
        }
        if (!empty($_POST['password'])) {
          $password = $_POST['password'];
        }
        if ($username === "" or $password === "") {
          $error = "username or password cannot be empty";
        }
        else {
          if(login($username, $password) == 1) {
            header("Location: welcome.php");
          }
          else {
            $error = "username or password doesn't match";
          }
          // $readData = read();
          // $userArr = json_decode($readData);
          //
          // for($i = 0; $i < count($userArr); $i++) {
          //   $user = $userArr[$i];
          //   if ($user->username === $username and $user->password === $password) {
          //     setcookie("username", $username, time() + 86400);
          //     setcookie("user", json_encode($user), time() + 86400);
          //     header("Location: welcome.php");
          //   }
          //   else {
          //     $error = "username or password doesn't match";
          //   }
          // }
        }
      }
    ?>

    <h1>Login Form</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
      <label for="username">Username: </label>
      <input type="text" name="username" value="<?php echo $username; ?>">
      <br>
      <label for="password">Password: </label>
      <input type="password" name="password" value="<?php echo $password; ?>">
      <br>
      <button type="submit">Login</button>
    </form>
    <span class="error"><?php echo $error; ?></span>
  </body>
</html>
