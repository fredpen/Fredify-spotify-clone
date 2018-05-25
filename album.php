<?php include ("includes/header.php"); ?>

  <?php if (isset($_GET['id'])){
    $albumId =  $_GET['id'];
    }
  else {
    header("location: index.php");
  }
  // the id of the album is used to track the artist from the database
  // $albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE id='$albumId'");
  // $album = mysqli_fetch_array($albumQuery);
  // $artistId = $album['artist'];
  //
  $album = new Album($con, $albumId);
  $artistId = $album->getAlbum();
  echo "<div class=''>" . $album->getTitle() . "</div>";
  $artist = new Artist($con, $artistId);
  echo $artist->getName();


   ?>
<?php include ("includes/footer.php"); ?>
