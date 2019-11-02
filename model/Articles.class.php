<?php
class Articles{
  private $titre; //Tiutre de l'article
  private $id; //Reference article
  private $auteur;
  private $type; //format
  private $genre;
  private $desc; //description
  private $quantite;
  private $prix;

  
  //Getter pour les differents attributs
  function getID(): STRING{
    if(isset($id)){
      return $this->id;
    }
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
//
  //Setter pour les attributs
} ?>
