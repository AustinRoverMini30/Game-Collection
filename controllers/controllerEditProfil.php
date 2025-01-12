<?php

include './models/modelEditProfil.php';

$model = new ModelEditProfil($pdo);

$error = '';

if (isset($_POST['supprimerProfil'])) {
    $model->deleteUser($_SESSION['user_id']);
    session_destroy();
    header('Location: profil');
}

else if (isset($_POST['modifierProfil'])) {
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail'])) {
        if (($model->updateUser($_SESSION['user_id'], $_POST['nom'], $_POST['prenom'], $_POST['mail'])) == false) {
            $error = '<div class="error">Email déjà utilisé</div>';
        }
    }
    if (isset($_POST['pwd']) && isset($_POST['pwdConfirm'])) {
        if ($_POST['pwd'] != $_POST['pwdConfirm']) {
            $error = '<div class="error">Les mots de passe ne correspondent pas</div>';
        } else {
            $model->updatePwd($_SESSION['user_id'], $_POST['pwdConfirm']);
        }
    }

    if ($error == '') {
        header('Location: profil');
    }
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