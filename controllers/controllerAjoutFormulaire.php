<?php

include './models/modelAjoutFormulaire.php';

$model = new ModelAjoutFormulaire($pdo);

if (isset($_POST['nomJeu']) && isset($_POST['editeurJeu']) && isset($_POST['sortieJeu']) && isset($_POST['plateforme']) && isset($_POST['descriptionJeu']) && isset($_POST['coverJeu']) && isset($_POST['siteJeu'])) {
    $nomJeu = $_POST['nomJeu'];
    $editeurJeu = $_POST['editeurJeu'];
    $sortieJeu = $_POST['sortieJeu'];
    $plateforme = $_POST['plateforme'];
    $descriptionJeu = $_POST['descriptionJeu'];
    $coverJeu = $_POST['coverJeu'];
    $siteJeu = $_POST['siteJeu'];

    $model->addGame($nomJeu, $editeurJeu, $sortieJeu, $plateforme, $descriptionJeu, $coverJeu, $siteJeu);
    $model->addGameToLibrary($_SESSION['user_id'], $nomJeu);

    header("Location: ajout");
}else{
    include './views/viewAjoutFormulaire.php';
}

?>