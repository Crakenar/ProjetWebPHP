<?php
require_once('Vente.class.php');
require_once('VenteDAO.class.php');

$dao = new VenteDAO();
//$all = $dao->getAll();
$all = $dao->getAleatoire();

//var_dump($google);

var_dump($all);
?>