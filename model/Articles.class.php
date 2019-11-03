<?php
class Articles{
  private $Titre; //Tiutre de l'article
  private $Id; //Reference article
  private $Auteur;
  private $Type; //format
  private $Genre;
  private $Desc; //description
  private $Quantite;
  private $Prix;
  private $Image;

  
  //Getter pour les differents attributs

  function getImage(): string{
    return $this->Image;
  }

  function getID(): STRING{
    return $this->Identifiant;
  }

  function getTitre(): STRING{
    return $this->Titre;
  }

  function getAuteur(): STRING{
    return $this->Auteur;
  }

  function getType(): STRING{
    return $this->Type;
  }

  function getGenre(): STRING{
    return $this->Genre;
  }

  function getDescription(): STRING{
    return $this->Description;
  }

  function getQuantite(): string{
    return $this->Quantite;
  }

  function getPrix():string{
    return $this->Prix;
  }
//
  //Setter pour les attributs
} ?>
