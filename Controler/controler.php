<?php

require('../model/Articles.class.php');
require('../model/ArticlesDAO.class.php');
require('../model/Vente.class.php');
require('../model/VenteDAO.class.php');


/////////////////////////////
////////Articles/////////////
////////////////////////////
$Adao = new ArticlesDAO();
$articles = $Adao->getAll();
$genre =$Adao->getWithGenre("Policier");


////////////////////////////////////
///////PointDeVente////////////////
//////////////////////////////////
$Vdao = new VenteDAO();
$all = $Vdao->getAll();
$lieu = $Vdao->getAleatoire(); //n'en renvoi qu'un
//Variable contenant l'adresse pour google map, malheureusement, il faudrait une cle api pour fonctionner sur tout les serveurs 
$google = $lieu[0]->getGoogleMap();

//Renvoi une array d'articles ayant le bon prix en parametre.


?>