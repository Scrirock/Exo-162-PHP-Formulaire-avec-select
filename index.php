<?php

    if (isset($_POST["nom"], $_POST["prenom"], $_POST["sexe"], $_FILES["file"])) {
        $filename = $_FILES["file"]["name"];
        $extension=strrchr($filename,'.');
        $extension=substr($extension,1);
        echo $_POST["sexe"]." ".$_POST["nom"] . " " . $_POST["prenom"]." ".$extension;

        if ($extension === "pdf") echo "<br>le fichier est bien un pdf";
        else echo "<br>Erreur fichier non reconu";
    }

?>