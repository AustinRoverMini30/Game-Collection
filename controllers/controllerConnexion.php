<?php

include './models/modelConnexion.php';

$model = new ModelConnexion($pdo);

$error = '';

if (isset($_POST['email_util']) && isset($_POST['password_util'])) {
    $model->connect($_POST['email_util'], $_POST['password_util']);

    if (isset($_SESSION['user_id'])) {
        header('Location: accueil');
    } else {
        $error = '<div class="error">Email ou mot de passe incorrect</div>';
        include './views/viewConnexion.php';
    }
}else{
    include './views/viewConnexion.php';
}

?>