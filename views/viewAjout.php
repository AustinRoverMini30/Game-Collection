<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleAjout.css">
    <title>Ajout à la bibliothèque</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>

        <div>
            <form action="ajout" method="POST" id="rechercheContainer">
                <h2 id="rechercheTitre">Ajouter un jeu à sa bibliothèque</h2>
                <input type="text" id="recherche" name="recherche" placeholder="Rechercher un jeu" required>
                <button type="submit" id="boutonRechercher">RECHERCHER</button>
            </form>

        </div>

        <div id="liste">
            <?php echo $result ?>
        </div>

        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>