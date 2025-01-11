<?php

include './models/modelEditProfil.php';

$model = new ModelEditProfil($pdo);


if (isset($_POST['supprimerProfil'])) {
    $model->deleteUser($_SESSION['user_id']);
    session_destroy();
    header('Location: profil');
}

else if (isset($_POST['modifierProfil'])) {
    $model->updateUser($_SESSION['user_id'], $_POST['nom'], $_POST['prenom'], $_POST['mail']);
    $model->updatePwd($_SESSION['user_id'], $_POST['pwdConfirm']);
    header('Location: profil');
}

else if (isset($_POST['deconnexionProfil'])) {
    session_destroy();
    header('Location: connexion');
}

$result = $model->getUser($_SESSION['user_id']);
$nom = $result['nom_util'];
$prenom = $result['prenom_util'];
$mail = $result['email_util'];

include './views/viewEditProfil.php';

?>