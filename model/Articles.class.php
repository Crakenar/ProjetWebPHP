<?php
class Articles{
  public $id; //Reference article
  public $titre; //Tiutre de l'article
  public $auteur;
  public $type; //format
  public $genre; //description
  public $desc;
  public $quantite;
  public $prix;


  //Getter pour les differents attributs
  function getID(): STRING{
    return $this->id;
  }

  function getTitre(): STRING{
    return $this->titre;
  }

  function getAuteur(): STRING{
    return $this->auteur;
  }

  function getType(): STRING{
    return $this->type;
  }

  function getGenre(): STRING{
    return $this->genre;
  }

  function getDescription(): STRING{
    return $this->desc;
  }

  function getQuantite(): int{
    return $this->quantite;
  }

  function getPrix():REAL{
    return $this->prix;
  }

  //Setter pour les attributs 
} ?>
