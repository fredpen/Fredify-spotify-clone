<?php include ("includes/header.php"); ?>

  <?php if (isset($_GET['id'])){
    $albumId =  $_GET['id'];
    }
  else {
    header("location: index.php");
  }

  $album = new Album($con, $albumId);

   ?>

   <div class="infoEntity">
     <section class="leftSection">
      <img src="<?php echo $album->getArtworkPath(); ?>" alt="">
     </section>
     <section class="rightSection">
       <h2><?php echo $album->getTitle(); ?></h2>
       <p>by <?php echo $album->getArtist(); ?></p>
       <p><?php echo $album->getNumberOfSongs();
            if ($album->getNumberOfSongs() > 1) {
              echo " songs";
            }else {
              echo " song";
            }
          ?>
       </p>
     </section>
   </div>

   <div class="trackListContainer">
     <ul class="trackList">
       <?php
          $songIdArray = $album->getSongIds();
          foreach ($songIdArray as $songId) {
            echo $songId;
          }
        ?>
     </ul>
   </div>



<?php include ("includes/footer.php"); ?>
