<?php include '../include/header.php'?>
    <h1>Bibliotheque</h1>
    
    <!-- Selection critères-->
    
    <ul>
        <form action="../View/Bibliotheque.view.php" method ="post"> 
        <p>Choisissez un genre</p>  
        <input type="radio" name ="genre" value ="Fantasy">Fantasy <br/> 
        <input type="radio" name ="genre" value ="Policier">Policier <br/> 
        <input type="radio" name ="genre" value ="Shonen">Shonen <br/> 
    <br>
    <p>Choisissez un prix </p>
    <input type="radio" name ="prix" value ="0" >Moins de 0 € <br>
    <input type="radio" name ="prix" value ="5">Moins de 5 € <br>
    <input type="radio" name ="prix" value ="10">Moins de 10 €<br>
    <input type="radio" name ="prix" value ="12">Moins de 12 € <br>
    <input type="radio" name ="prix" value ="18">Moins de 18 € <br>
    <input type="radio" name ="prix" value ="20" CHECKED>Moins de 20 € <br>
    <br>
    <br>
    <input type="submit" value ="Valider">
    </form>
    </ul>
    
    <?php
    
    ///////Affichage des articles ayant le genre selectionné ou alors tous les afficher///
    ///Attention on peut faire ça car on a pas beaucoup de livres, il faudrait afficher N (connu) livres
    require_once('../Controler/controler.php');
    
    if(isset($_POST['genre']) || isset($_POST['Prix'])) {
        //$genre =$Adao->getWithGenre($_POST['genre']);
        //$price = $Adao->getWithPrice($_POST['prix']);
        $genre = $Adao->getWithPriceGenre($_POST['prix'],$_POST['genre']) ?>
        Voici nos articles ayant comme genre : <?=$_POST['genre'] ?>
        Et Comme prix, moins de  : <?=$_POST['prix'] ?> €
        <br>
        <br>
        <br>
        <table>
        <?php foreach($genre as $key => $value): ?>
            <tr>    
               <td>
                Titre : <?=$genre[$key]->getTitre()?> 
                <br>  Prix : <?=$genre[$key]->getPrix()?> €
                <br> Resume : <?=$genre[$key]->getDescription()?>
                <br> Reference : <?=$genre[$key]->getID()?>
                <br>
                <a href = "PointDeVente.view.php">  <img src="../View/Images/ImagesLivresEnBibliotheque/<?= $genre[$key]->getImage()?>" alt="" height="200" width="200"> </a>
                </td> 
            </tr>
            <?php endforeach ?>
                
        </table>
    <?php } else { ?>
        Voici tout les articles
        <br>
        <br>
    <table>
        <?php foreach($articles as $key => $value) : ?>
        <tr>
            <td>
                Titre : <?= $articles[$key]->getTitre()?>
                <br>
                Prix : <?= $articles[$key]->getPrix()?> €
                <br>
                Resume : <?= $articles[$key]->getDescription()?>
                <br>
                Reference : <?= $articles[$key]->getID()?>
                <br>
                <a href = "PointDeVente.view.php">  <img src="../View/Images/ImagesLivresEnBibliotheque/<?= $articles[$key]->getImage()?>" alt="" height="200" width="200"> </a>
            </td>
        </tr>
        <?php endforeach?>
    </table>
    <?php }?>
<?php include '../include/footer.php'?>
