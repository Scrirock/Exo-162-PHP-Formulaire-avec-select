<?php

    if (isset($_GET["nom"], $_GET["prenom"])){
        echo $_GET["nom"]." ".$_GET["prenom"];
    }


    if (isset($_POST["nom"], $_POST["prenom"])) {
        echo $_POST["nom"] . " " . $_POST["prenom"];
    }

?>