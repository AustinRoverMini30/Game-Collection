<?php

include './models/modelJeu.php';

$model = new ModelJeu($pdo);

if (isset($_POST['idJeu'])){

    if (isset($_POST['delete'])){
        $model->removeGameFromLibrary($_SESSION['user_id'], $_POST['idJeu']);
        header('Location: bibliotheque');
    }
    if (isset($_POST['update'])){
        $model->updateNbHours($_SESSION['user_id'], $_POST['idJeu'], $_POST['tempsJeu']);
        $result = $model->getGameWithId($_SESSION['user_id'], $_POST['idJeu']);
        include './views/viewJeu.php';
    }else{
        $result = $model->getGameWithId($_SESSION['user_id'], $_POST['idJeu']);
        include './views/viewJeu.php';
    }
}else{
    header('Location: accueil');
}

?>