<?php

include './models/modelInscription.php';

$model = new ModelInscription($pdo);

if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])) {
    $model->addUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password']);
    header('Location: connexion');
} else {
    include './views/viewInscription.php';
}

?>