<?php include '../include/header.php'?>
    <h1>Point De Vente</h1>
    <!-- Afficher le point de vente du livre -->
    <table>
    <?php require_once('../Controler/controler.php');?>
      <tr>
        <td><h2>Votre article est disponible à l'adresse suivante : </h2>
        <br>
         <p><?= $lieu[0]->getAdresse()?></p>
        <br>
       </td>
      </tr>
      
    </table>
   <iframe src="https://www.google.com/maps/<?echo''.$google.''?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

<?php include '../include/footer.php'?>
