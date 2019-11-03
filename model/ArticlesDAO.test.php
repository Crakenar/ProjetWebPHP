<?php
require_once('Articles.class.php');
require_once('ArticlesDAO.class.php');

//$path = '../data';
//$config = parse_ini_file('../config/config.ini');
//print_r($config);

$dao = new ArticlesDAO();
//$all = $dao->getAll();
//$all = $dao->getWithId(1);
//var_dump($all[1]);

$all = $dao->getWithGenre("Policier");
//$all = $dao->getWithGenre("Fantasy");
//$all = $dao->getWithGenre("Shonen");
var_dump($all);
?>