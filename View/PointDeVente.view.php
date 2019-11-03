<?php include '../include/header.php'?>
    <h1>PointDeVente</h1>
    <!-- Afficher le point de vente du livre -->
    <?php
    session_start();
    $article = $_SESSION['monArticle'];
   // var_dump($article);
    require_once('../Controler/controler.php');
      foreach ($lieu as $key => $value) {
        print("Votre article est disponible à l'adresse suivante : ");
        print($lieu[$key]->getAdresse());
        echo'<br>';
        $google = $lieu[$key]->getGoogleMap();
      }
    ?>
   <iframe src="https://www.google.com/maps/<?echo''.$google.''?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
<?php include '../include/footer.php'?>
