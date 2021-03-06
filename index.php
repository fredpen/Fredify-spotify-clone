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
        <!-- the first section the houses the album work -->
        <div id="nowPlayingIcon">
          <div class="content">
            <div class="albumLink">
              <img class="albumartwork" src="assets/images/icons/marley.jpeg" alt="albumartwork">
            </div>
            <div class="trackInfo">
              <span class="trackName">
                <span>Happy Birthday</span>
              </span>
              <span class="artistName">
                <span>fred</span>
              </span>
            </div>
          </div>
        </div>
        <!-- the midlle section of the playbar -->
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

            <div class="playBackBar">
                <span class="progressTime current">0:00</span>
                <div class="progressbar">
                  <div class="progressbarBg">
                    <div class="progress"></div>
                  </div>
                <span class="progressTime remaining">0:00</span>
            </div>
          </div>
        </div>
        </div>
        <!-- the third section that house the volume bar -->
        <div id="nowPlayingVolume">
          <div class="volumeBar">
            <div class="butons">
              <button class="controlButton volume" title="Volume">
                <img src="assets/images/icons/volume.png" alt="Volume button">
              </button>
              <div class="progressbar">
                <div class="progressbarBg">
                  <div class="progress"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- middle section ends here -->
      </div> <!--now playing bar -->
    </div><!--now playing container -->
  </body>
</html>
