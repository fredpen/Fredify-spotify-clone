<?php
  include ("includes/database-config.php");
  if (isset($_SESSION['userLoggedIn'])) {
    $currentUser = $_SESSION['userLoggedIn'];
  }
    else {
    header ("Location: register.php");
  }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>welcome</title>
  </head>

  <body>
    hello
  </body>

</html>
