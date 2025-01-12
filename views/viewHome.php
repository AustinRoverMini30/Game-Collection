<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleHome.css">
    <title>Bibliothèque</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>
        <div id="banniereSalutation">

            <h2 id="titre">Salut <?php echo $model->getIdentity() ?> !<br>prêt à ajouter des<br>jeux à ta collection ?</h2>
        </div>

        <div id="liste">
            <h2 id="mesJeuxTitre">Mes jeux</h2>

            <div id="mesJeux">
                <?php echo $model->getLibrary($_SESSION['user_id']); ?>
            </div>

        </div>

        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>