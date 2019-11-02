<?php
require_once('Articles.class.php');
require_once('ArticlesDAO.class.php');

//$path = '../data';
//$config = parse_ini_file('../config/config.ini');
//print_r($config);

$dao = new ArticlesDAO();
$all = $dao->getAll();
var_dump($m);
?>