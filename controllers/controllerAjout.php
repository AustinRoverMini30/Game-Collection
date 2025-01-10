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
}else{
    $result = "";
    include './views/viewAjout.php';
}

?>