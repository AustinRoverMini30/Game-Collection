<?php

include './models/modelJeu.php';

$model = new ModelJeu($pdo);

if (isset($_POST['id_jeu'])){

    if (isset($_POST['delete'])){
        $model->removeGameFromLibrary($_SESSION['user_id'], $_POST['id_jeu']);
        header('Location: bibliotheque');
    }
    if (isset($_POST['update'])){
        $model->updateNbHours($_SESSION['user_id'], $_POST['id_jeu'], $_POST['tempsJeu']);
        header('Location: bibliotheque');
    }else{
        $result = $model->getGameWithId($_SESSION['user_id'], $_POST['id_jeu']);
        include './views/viewJeu.php';
    }
}else{
    header('Location: accueil');
}

?>