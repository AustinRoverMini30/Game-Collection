<?php

include './models/modelAjout.php';

$model = new ModelAjout($pdo);

if (isset($_POST['recherche'])) {
    $result = $model->getAllGamesMatches($_POST['recherche']);

    if ($result == "") {
        header('Location: formulaireAjout');
    }else{
        include './views/viewAjout.php';
    }
}else if (isset($_POST['idJeu'])) {
    $model->addGameToLibrary($_SESSION['user_id'], $_POST['idJeu']);
    header("Location : accueil");
}else{
    $result = $model->getAllGamesMatches("");
    include './views/viewAjout.php';
}

?>