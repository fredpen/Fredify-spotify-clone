<?php

  class Album{
    private $con;
    private $id;
    private $title;
    private $genre;
    private $artist;
    private $artworkPath;

  public function __construct($con, $id){
    $this->con = $con;
    $this->id = $id;

    $albumQuery = mysqli_query($this->con, "SELECT * FROM albums WHERE id='$this->id'");
    $album = mysqli_fetch_array($albumQuery);

    $this->title = $album['title'];
    $this->genre = $album['genre'];
    $this->artworkPath = $album['artworkPath'];
    $this->artist = $album['artist'];
    }

  public function getTitle(){
    return $this->title;
  }

  public function getGenre(){
    return $this->genre;
  }

  public function getArtist(){
    $artistName = New Artist($this->con, $this->id);
    return $artistName->getName();
  }

  public function getArtworkPath(){
    return $this->artworkPath;
  }

  public function getNumberOfSongs(){
    $query = mysqli_query($this->con, "SELECT id FROM Songs WHERE album='$this->id'");
    return mysqli_num_rows($query);
  }

  public function getSongIds() {
  	$query = mysqli_query($this->con, "SELECT id FROM Songs WHERE album='$this->id' ORDER BY albumOrder ASC");
  	$array = array();
  	while($row = mysqli_fetch_array($query)) {
  		array_push($array, $row['id']);
  	}
  	return $array;

    		}


  }
 ?>
