<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>

    <?php
    $username = "";
      if (isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
      }
      $username = strtoupper($username);
      echo "<h2>WELCOME $username</h2>";
      echo "<br>";
      echo "<h3>User Details</h3>";

    ?>

  </body>
</html>
