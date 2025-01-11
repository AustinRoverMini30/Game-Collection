<?php

include './models/modelProfil.php';

$model = new ModelProfil($pdo);

if (isset($_POST['supprimerProfil'])) {
    $model->deleteUser($_SESSION['user_id']);
    session_destroy();
    header('Location: profil');
}

else if (isset($_POST['modifierProfil'])) {
    header('Location: editProfil');
}

else if (isset($_POST['deconnexionProfil'])) {
    session_destroy();
    header('Location: connexion');
}

else {
    $user = $model->getUser($_SESSION['user_id']);
    $nom = $user['nom_util'];
    $prenom = $user['prenom_util'];
    $mail = $user['email_util'];
}


include './views/viewProfil.php';

?>

