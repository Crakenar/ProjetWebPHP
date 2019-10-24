<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" media ="screen" href="style.css">
    <title></title>
  </head>
  <body>
    <h1>Bibliotheque</h1>
    <!-- Barre de navigation-->
    <ul>
        <li> <a href="Accueil.view.php">Accueil</a></li>
        <li> <a href="Bibliotheque.view.php">Bibliotheque</a></li>
        <li> <a href="Contact.view.php">Contact</a></li>
    </ul>
    <!-- Selection critères-->
    <p>Choisissez vos critères</p>
    <ul>
        <form action="mapagePHP">
            Recherche : <input type="search" name ="Ma Recherche :"> <br>
            <input type="submit">
        </form>
        <fieldset>
            <legend>Genre</legend>
            <input type="radio" name= "choix" value ="Science fiction" id ="SF">
            <label for="SF">Science Fiction</label>
            <br>
            <input type="radio" name= "choix" value ="Romance" id ="romance">
            <label for="Romance">Romance</label>
            <br>
            <input type="radio" name= "choix" value ="Action" id ="action">
            <label for="action">Action</label>
            <br>
        </fieldset>

        <form action="">
            <select name="Date" id="">
            <option value="">Date de parution</option>
                <option value="">Apres 2000</option>
                <option value="">Apres 2010</option>
                <option value="">Apres 2015</option>
            </select>
        </form>
    <br>
        <form action="" method ="POST">
            <input type="range" min ="1" max ="100" value = "100" class ="slider" id="myRangePrice">
            <input type="text" name = "bar" id ="bar" value="Slider Value =1">
            <input type=submit value=Submit />
        </form>
    </ul>
  </body>
</html>
