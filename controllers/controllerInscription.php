<?php

include './models/modelInscription.php';

$model = new ModelInscription($pdo);

$error = "";

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {

    if ($_POST['password'] != $_POST['confirm_password']) {
        $error = "<div class=\"error\"><p>Les mots de passe ne correspondent pas</p></div>";
        include './views/viewInscription.php';
    }else if ($model->addUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'])) {
        header('Location: connexion');
    }else {
        $error = "<div class=\"error\"><p>Cet email est déjà utilisé</p></div>";
        include './views/viewInscription.php';
    }
} else {
    include './views/viewInscription.php';
}

?>