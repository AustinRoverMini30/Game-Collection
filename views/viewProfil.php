<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleProfil.css">
    <title>Profil</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>

        <div class=clause-profil>
            <h2>Mon profil</h2>

            <h3>Nom : <?php echo $nom ?></h3>
            <h3>Prénom : <?php echo $prenom ?></h3>
            <h3>Email : <?php echo $mail ?></h3>
            
            <form method="POST">
            <button type="submit" name="modifierProfil">MODIFIER MON PROFIL</button>
            <button type="submit" name="supprimerProfil">SUPPRIMER MON COMPTE</button>
            <button type="submit" name="deconnexionProfil">SE DECONNECTER</button>
            </form>
        </div>
        
        <?php include './views/partials/footer.php' ?>
    </main>

</body>
</html>