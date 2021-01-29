<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire exo 6</title>
</head>
<body>

    <?php if(empty($_POST)): ?>
        <form action="formulaire%20ex6.php" method="POST">
            <select name="sexe" id="sexe">
                <option value="Mr">Monsieur</option>
                <option value="Mme">Madame</option>
            </select>
            <label for="nom">Nom: </label>
            <input type="text" name="nom" id="nom">
            <label for="prenom">Prenom: </label>
            <input type="text" name="prenom" id="prenom">
            <input type="submit">
        </form>
    <?php else:
        if (isset($_POST["nom"], $_POST["prenom"], $_POST["sexe"])) {
            echo $_POST["sexe"]." ".$_POST["nom"] . " " . $_POST["prenom"];
        }

    endif ?>



</body>
</html>