<?php

include './models/modelAjoutFormulaire.php';

$model = new ModelAjoutFormulaire($pdo);

$error = '';

if (isset($_POST['nomJeu']) && isset($_POST['editeurJeu']) && isset($_POST['sortieJeu']) && isset($_POST['plateforme']) && isset($_POST['description_jeu']) && isset($_POST['coverJeu']) && isset($_POST['siteJeu'])) {
    $nomJeu = $_POST['nomJeu'];
    $editeurJeu = $_POST['editeurJeu'];
    $sortieJeu = $_POST['sortieJeu'];
    $plateforme = $_POST['plateforme'];
    $desc_jeu = $_POST['description_jeu'];
    $coverJeu = $_POST['coverJeu'];
    $siteJeu = $_POST['siteJeu'];

    $model->addGame($nomJeu, $editeurJeu, $sortieJeu, $plateforme, $desc_jeu, $coverJeu, $siteJeu);
    $model->addGameToLibrary($_SESSION['user_id'], $nomJeu);

    header('Location: ajout');

    
}else{
    include './views/viewAjoutFormulaire.php';
}

?>