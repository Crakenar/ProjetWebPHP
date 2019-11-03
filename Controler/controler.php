<?php

require('../model/Articles.class.php');
require('../model/ArticlesDAO.class.php');
require('../model/Vente.class.php');
require('../model/VenteDAO.class.php');
$Adao = new ArticlesDAO();
$articles = $Adao->getAll();
$genre =$Adao->getWithGenre("Policier");

$Vdao = new VenteDAO();
$all = $Vdao->getAll();
$lieu = $Vdao->getAleatoire();



?>