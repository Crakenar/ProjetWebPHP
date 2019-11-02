<?php
class ArticlesDAO{
  private $db;
  //Construction de l'objet
  function __construct(){
   // $database ='sqlite:..data/articles.db';  
    try {
      $this->db = new PDO('sqlite:../data/articles.db');
    } catch (Exception $e) {
      echo 'Exception reçue : ', $e->getMessage(),"Mauvais chemin de fichier ";
    }
  }

  function getAll() : array{
    $req = "SELECT * FROM articles";
    $resultat = $this->db->query($req);
    $m = $resultat->fetchAll(PDO::FETCH_CLASS,"Articles");
    return $m;
  }
  public function getWithId(int $id){
    $sql = "SELECT * FROM articles WHERE id = '$id'";
    var_dump($this);
    $sth = $this->db->query($sql);
    if ($sth !== FALSE) {
      $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    }else{
      print("Erreur");
    }
    return $result;
  }

  public function getWithTitle(int $titre){
    $sql = "SELECT * FROM articles WHERE titre = '$titre'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }

  public function getWithAuthor(int $auteur){
    $sql = "SELECT * FROM articles WHERE auteur = '$auteur'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }

  public function getWithType(int $type){
    $sql = "SELECT * FROM articles WHERE 'type' = '$type'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }

  public function getWithGenre(int $genre){
    $sql = "SELECT * FROM articles WHERE genre = '$genre'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }

  public function getWithQuantity(int $quantite){
    $sql = "SELECT * FROM articles WHERE quantite = '$quantite'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }

  public function getWithPrice(int $prix){
    $sql = "SELECT * FROM articles WHERE prix = '$prix'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }
} ?>
