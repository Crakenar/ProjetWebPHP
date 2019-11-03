<?php include '../include/header.php'?>

    <h1>Accueil test</h1>
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

<?php include '../include/footer.php'?>

