<?php

include './models/modelConnexion.php';

$model = new ModelConnexion($pdo);

if (isset($_POST['email_util']) && isset($_POST['password_util'])) {
    $model->connect($_POST['email_util'], $_POST['password_util']);

    if (isset($_SESSION['user_id'])) {
        header('Location: accueil');
    } else {
        include './views/viewConnexion.php';
    }
}else{
    include './views/viewConnexion.php';
}

?>