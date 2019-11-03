<?php
require_once("../model/Vente.class.php");
class VenteDAO{
private $db;

    function __construct(){
        try {
            $this->db = new PDO('sqlite:../data/PointDeVente.db');
        } catch (Exception $e) {
            echo 'Exception reçue : ', $e->getMessage(),"Mauvais chemin de fichier ";
        }
    }

    //Permet d'avoir l'ensemble des point de vente
    function getAll() : array{
        $requeste = "SELECT * FROM lieux";
        $resultat = $this->db->query($requeste);
        $m = $resultat->fetchAll(PDO::FETCH_CLASS);
        return $m;
    }

    //Retourne un point de vente aléatoire contenu dans pointDeVente.db
    function getAleatoire() : array {
        $req = "SELECT * FROM Lieux ORDER BY RANDOM() LIMIT 1";
        $resultat = $this->db->query($req);
        $m = $resultat->fetchAll(PDO::FETCH_CLASS,"Vente");
        return $m;
    }
}

?>