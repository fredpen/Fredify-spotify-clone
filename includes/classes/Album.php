<?php

  class Album{
    private $con;
    private $id;

  public function __construct($con, $id){
    $this->con = $con;
    $this->id = $id;
  }

  public function getAlbum(){
    $albumQuery = mysqli_query($this->con, "SELECT * FROM albums WHERE id='$this->id'");
    $album = mysqli_fetch_array($albumQuery);
    return $album['artist'];
  }

  public function getTitle(){
    $albumQuery = mysqli_query($this->con, "SELECT * FROM albums WHERE id='$this->id'");
    $album = mysqli_fetch_array($albumQuery);
    return $album['title'];
  }
  }
 ?>
