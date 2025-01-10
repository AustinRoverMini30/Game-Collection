<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleAjout.css">
    <title>Home</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>

        <div id="rechercheContainer">
            <form action="ajout" method="POST">
                <h2 id="rechercheTitre">Ajouter un jeu à sa bibliothèque</h2>
                <input type="text" id="recherche" name="recherche" placeholder="Rechercher un jeu" required>
                <button type="submit" id="boutonRechercher">RECHERCHER</button>
            </form>

        </div>

        <div id="liste">
            <h2 id="résultatsTitre">Résultats de la recherche</h2>

            <div id="resultatJeux">
                <?php echo $result ?>
            </div>
        </div>

        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>