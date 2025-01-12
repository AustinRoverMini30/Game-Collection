<?php

include './models/modelAjout.php';

$model = new ModelAjout($pdo);

if (isset($_POST['recherche'])) {
    $result = $model->getAllGamesMatches($_POST['recherche']);

    switch ($result) {
        case "<h2 id=\"résultatsTitre\">Résultats de la recherche</h2><div id=\"resultatJeux\"></div>":
            header('Location: formulaireAjout');
            break;
        default:
            include './views/viewAjout.php';
            break;
    }
} else if (isset($_POST['idJeu'])) {
    $model->addGameToLibrary($_SESSION['user_id'], $_POST['idJeu']);
    header("Location: ajout");
} else {
    $result = $model->getAllGamesMatches("");

    if ($result == "<h2 id=\"résultatsTitre\">Résultats de la recherche</h2><div id=\"resultatJeux\"></div>") {
        header('Location: formulaireAjout');
    }

    include './views/viewAjout.php';
}

?>