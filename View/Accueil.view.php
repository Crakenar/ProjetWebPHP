<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media ="screen" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Accueil test</h1>
    <!-- Barre de navigation-->
    <ul>
        <li> <a href="Accueil.view.php">Accueil</a></li>
        <li> <a href="Bibliotheque.view.php">Bibliotheque</a></li>
        <li> <a href="PointDeVente.view.php">PointDeVente</a></li>
    </ul>
    <!-- Fin de la barre de navigation -->
    <p>NOS PRODUITS PHARES</p>

    <div class="section" style="max-width:500px">
      <img class="mySlides" src="../View/Images/TintinAuTibet.jpg" style="width:70%">
      <img class="mySlides" src="../View/Images/Fouloscopie.jpg" style="width:100%">
      <img class="mySlides" src="../View/Images/Le-feu-dans-le-ciel.jpg" style="width:100%">
     </div>
    <!-- Script pour permettre l'animation des images-->

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2500);    
    }
    </script>

      <!--utiliser un chemin absolu venant de config.ini ? -->

kk
    <footer>
      <p>Site Web informationnel fictif concernant des livres </p>
      <p>2019 Lucas Zaetta et Téo Berguerre</p>
    </footer>
</body>
</html>
