<?php

    if (isset($_POST["nom"], $_POST["prenom"], $_POST["sexe"], $_FILES["file"])) {
        $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
        echo $_POST["sexe"]." ".$_POST["nom"] . " " . $_POST["prenom"]." ".$extension;

        if ($extension === "pdf") echo "<br>le fichier est bien un pdf";
        else echo "<br>Erreur fichier non reconu";
    }

?>