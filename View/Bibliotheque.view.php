<?php include '../include/header.php'?>
    <h1>Bibliotheque</h1>
    
    <!-- Selection critères-->
    <p>Choisissez vos critères</p>
    <ul>
        <form action="../View/Bibliotheque.view.php" method ="post">   
        <input type="checkbox" name ="genre" value ="Fantasy">Fantasy <br/> 
        <input type="checkbox" name ="genre" value ="Policier">Policier <br/> 
        <input type="checkbox" name ="genre" value ="Shonen">Shonen <br/> 
    <br>
    <input type="submit" value ="Enregistrer">
    </form>
    </ul>
    
    <?php
    session_start();
    ///////Affichage des articles ayant le genre selectionné ou alors tous les afficher///
    ///Attention on peut faire ça car on a pas beaucoup de livres, il faudrait afficher N (connu) livres
    require_once('../Controler/controler.php');
    if(isset($_POST['genre'])){
        $genre =$Adao->getWithGenre($_POST['genre']);
        foreach($genre as $key => $value){
            echo'Titre : ';
            print($genre[$key]->getTitre());
            echo"<br>";
            echo'Prix : ';
            print($genre[$key]->getPrix());
            echo"<br>";
            print($genre[$key]->getDescription());
            echo"<br>";
            print("Reference : ");
            print($genre[$key]->getID());
            echo"<br>";
            $image = "../View/Images/ImagesLivresEnBibliotheque/".$genre[$key]->getImage();
            echo'<a href = "PointDeVente.view.php"> <img src="'.$image.'" height="200" width="200"> </a>';
            echo"<br>";
            echo"<br>";

        }
    }else{
        foreach($articles as $key => $value){
            $_SESSION['monArticle'] = $articles;
            echo'Titre : ';
            print($articles[$key]->getTitre());
            echo"<br>";
            echo'Prix : ';
            print($articles[$key]->getPrix());
            echo"<br>";
            print($articles[$key]->getDescription());
            echo"<br>";
            print("Reference : ");
            print($articles[$key]->getID());
            echo"<br>";
            $image = "../View/Images/ImagesLivresEnBibliotheque/".$articles[$key]->getImage();
            echo'<a href = "PointDeVente.view.php"> <img src="'.$image.'" height="200" width="200"> </a>';
            echo"<br>";
            echo"<br>";
        }
    }

    /////Affichage des articles en fonction du bouton cliqué(GENRE)///////////
    
    ?>
<?php include '../include/footer.php'?>
