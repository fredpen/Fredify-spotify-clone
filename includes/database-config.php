<?php

    ob_start();
    $timezone = date_default_timezone_set("Africa/Lagos");
    $dbServername = "localhost";
    $dbUsername ="root";
    $dbPassword = "";
    $dbName = "fredify";

  $con = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);

  if (mysqli_connect_errno()) {
    echo "couldnt connect to the database because" . mysqli_connect_errno();
  }
?>
