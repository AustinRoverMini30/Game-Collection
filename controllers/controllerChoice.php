<?php

if (isset($_GET["page"])) {
    if ($_GET["page"] == "accueil") {
        include 'controllerAccueil.php';
    }
    else if ($_GET["page"] == "ajout") {
        include 'controllerAjout.php';
    }
    else if ($_GET["page"] == "bibliotheque") {
        include 'controllerAjoutFormulaire.php';
    }
    else if ($_GET["page"] == "formulaireAjout") {
        include 'controllerAjoutFormulaire.php';
    }
    else if ($_GET["page"] == "classement") {
        include 'controllerClassement.php';
    }
    else if ($_GET["page"] == "connexion") {
        include 'controllerConnexion.php';
    }
    else if ($_GET["page"] == "formulaire") {
        include 'controllerFormulaire.php';
    }
    else if ($_GET["page"] == "inscription") {
        include 'controllerInscription.php';
    }
    else if ($_GET["page"] == "modificationJeu") {
        include 'controllerModificationJeu.php';
    }
    else if ($_GET["page"] == "profil") {
        include 'controllerProfil.php';
    }
} else {
    include 'controllerAccueil.php';
}

?>