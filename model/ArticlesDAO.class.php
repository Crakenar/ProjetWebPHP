<?php
require_once("../model/Articles.class.php");
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

  
  public function getWithId(int $Id) : array{
    $sql = "SELECT * FROM articles WHERE id = '$Id'";
    var_dump($this);
    $sth = $this->db->query($sql);
    if ($sth !== FALSE) {
      $result = $sth->fetchAll(PDO::FETCH_CLASS);
    }else{
      print("Erreur");
    }
    return $result;
  }
  public function getWithGenre(string $genre): array{
    $sql = "SELECT * FROM articles WHERE genre = '$genre'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS,"Articles");
    return $result;
  }

















  public function getWithTitle(string $Titre) : array{
    $sql = "SELECT * FROM articles WHERE titre = '$Titre'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }

  public function getWithAuthor(string $auteur): array{
    $sql = "SELECT * FROM articles WHERE auteur = '$auteur'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }

  public function getWithType(string $type): array{
    $sql = "SELECT * FROM articles WHERE 'type' = '$type'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }



  public function getWithQuantity(int $quantite): array{
    $sql = "SELECT * FROM articles WHERE quantite = '$quantite'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }

  public function getWithPrice(int $prix): array{
    $sql = "SELECT * FROM articles WHERE prix = '$prix'";
    $sth = $this->db->query($sql);
    $result = $sth->fetchAll(PDO::FETCH_CLASS)[0];
    return $result;
  }
} ?>
