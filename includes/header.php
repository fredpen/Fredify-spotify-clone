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
    <link rel="shortcut icon" href="assets/images/icons/navIcon.png">
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>
  <body>
    <div id="mainContainer">
      <div id="topContainer">
        <!--THIS HOUSES THE BOTH NAVBAR AND THE MAIN BAR-->
      <?php include ("includes/navBarContainer.php"); ?>
      <div id="mainViewContainer">
        <div id="mainContent">
