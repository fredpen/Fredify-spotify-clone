<?php
  class Song{

    private $con;
    private $id;
    private $title;
    private $mysqliData;
    private $artistId;
    private $albumId;
    private $genre;
    private $duration;
    private $path;

    public function __construct($con, $id){
      $this->con = $con;
      $this->id = $id;


    $query = mysqli_query($this->con, "SELECT * FROM Songs WHERE id='$this->id'");
    $this->mysqliData = mysqli_fetch_array($query);

    $this->title = $this->mysqliData['title'];
    $this->artistId = $this->mysqliData['artist'];
    $this->albumId = $this->mysqliData['album'];
    $this->genre = $this->mysqliData['genre'];
    $this->duration = $this->mysqliData['duration'];
    $this->path = $this->mysqliData['path'];
    }

    public function getTitle(){
      return $this->title;
    }
    public function getArtist(){
      $artist =  new Artist($this->con, $this->artistId);
      return $artist->getName();
    }
    public function getAlbum(){
      $album =  new Album($this->con, $this->albumId);
      return $album->getTitle();
    }

    public function getGenre(){
      return $this->genre;
    }
    public function getDuration(){
      return $this->duration;
    }
    public function getPath(){
      return $this->path;
    }
}

?>
