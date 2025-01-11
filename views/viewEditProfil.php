<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleEditProfil.css">
    <title>Home</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>

        <div class=clause-profil>
            <h2>Mon profil</h2>

            <form method="POST">

            <h3>Nom : <?php echo $nom ?></h3>
            <input type="text" name="nom" placeholder="Nouveau nom" value="<?php echo $nom ?>">
            <h3>Prénom : <?php echo $prenom ?></h3>
            <input type="text" name="prenom" placeholder="Nouveau prénom" value="<?php echo $prenom ?>">
            <h3>Email : <?php echo $mail ?></h3>
            <input type="email" name="mail" placeholder="Nouvel email" value="<?php echo $mail ?>">

            <h3>Mot de passe</h3>
            <input type="password" name="pwd" placeholder="Nouveau mot de passe">

            <h3>Confirmer mot de passe</h3>
            <input type="password" name="pwdConfirm" placeholder="Confirmer mot de passe">
            
            <button type="submit" name="modifierProfil">MODIFIER</button>
            <button type="submit" name="supprimerProfil">SUPPRIMER MON COMPTE</button>
            <button type="submit" name="deconnexionProfil">SE DECONNECTER</button>
            </form>
        </div>
        
        <?php include './views/partials/footer.php' ?>
    </main>

</body>
</html>