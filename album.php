<?php include ("includes/header.php"); ?>

  <?php if (isset($_GET['id'])){
    $albumId =  $_GET['id'];
  }
  else {
    header("location: index.php");
  }

  $albumQuery = mysqli_query($con, "SELECT * FROM albums WHERE id='$albumId'");
  $album = mysqli_fetch_array($albumQuery);
  echo $album['title'];
   ?>

<?php include ("includes/footer.php"); ?>
