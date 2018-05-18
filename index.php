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
    <link rel="shortcut icon" href="assets/images/icons/favicon.jpg">
    <link rel="stylesheet" href="assets/css/styles.css">
  </head>

  <body>
    <div id="nowPlayingBarCointaner">

      <div id="nowPlayingBar">

        <div id="nowPlayingIcon">

        </div>

        <div id="nowPlayingButtons">

          <div class="content playerControls">

            <div class="butons">

              <button class="controlButton shuffle" title="Shuffle">
                <img src="assets/images/icons/shuffle.png" alt="Shuffle">
              </button>
              <button class="controlButton previous" title="previous">
                <img src="assets/images/icons/previous.png" alt="previous">
              </button>
              <button class="controlButton play" title="play">
                <img src="assets/images/icons/play.png" alt="play">
              </button>
              <button class="controlButton pause" title="pause">
                <img src="assets/images/icons/pause.png" alt="pause">
              </button>
              <button class="controlButton next" title="next">
                <img src="assets/images/icons/next.png" alt="next">
              </button>
              <button class="controlButton repeat" title="repeat">
                <img src="assets/images/icons/repeat.png" alt="repeat">
              </button>

            </div>

          </div>

        </div>

        <div id="nowPlayingVolume">

        </div>

      </div>

    </div>

    </div>
  </body>

</html>
