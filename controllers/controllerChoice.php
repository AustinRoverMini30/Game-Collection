<?php

include './config/DataBaseProcessor.php';

$pdo = new DataBaseProcessor("td22-6", "td22-6", "30GBqz7QdzsgT6XM");
$pdo = $pdo->getPdo();

if (isset($_GET["page"]) && ($_GET["page"] == "inscription")) {
    include 'controllerInscription.php';
}else if (isset($_SESSION['user_id'])) {
    if (isset($_GET["page"])) {
        if ($_GET["page"] == "accueil") {
            include 'controllerAccueil.php';
        }
        else if ($_GET["page"] == "ajout") {
            include 'controllerAjout.php';
        }
        else if ($_GET["page"] == "bibliotheque") {
            include 'controllerAccueil.php';
        }
        else if ($_GET["page"] == "formulaireAjout") {
            include 'controllerAjoutFormulaire.php';
        }
        else if ($_GET["page"] == "classement") {
            include 'controllerClassement.php';
        }
        else if ($_GET["page"] == "connexion") {
            include 'controllerProfil.php';
        }
        else if ($_GET["page"] == "inscription") {
            include 'controllerProfil.php';
        }
        else if ($_GET["page"] == "formulaire") {
            include 'controllerFormulaire.php';
        }
        else if ($_GET["page"] == "modificationJeu") {
            include 'controllerModificationJeu.php';
        }
        else if ($_GET["page"] == "profil") {
            include 'controllerProfil.php';
        }
        else if ($_GET["page"] == "deconnexion"){
            session_destroy();
            include 'controllerConnexion.php';
        }
    } else {
        include 'controllerAccueil.php';
    }
}else{
    include 'controllerConnexion.php';
}

?>