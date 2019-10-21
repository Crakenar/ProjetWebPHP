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
    <h1>Accueil</h1>
    <!-- Barre de navigation-->
    <ul>
        <li>Accueil</li>
        <li>Bibliotheque</li>
        <li>Contact</li>
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
            <input type="radio" name= "choix" value ="Romance" id ="aomance">
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
