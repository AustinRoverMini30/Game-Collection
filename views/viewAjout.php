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

        <div>
            <h2 id="rechercheTitre">Ajouter un jeu à sa bibliothèque</h2>
            <input type="text" id="recherche" placeholder="Rechercher un jeu">
            <button id="boutonRechercher">RECHERCHER</button>
        </div>

        <div id="liste">
            <h2 id="résultatsTitre">Résultats de la recherche</h2>

            <div id="resultatJeux">
                <div class="jeu" style="background-image:url('./assets/images/minecraftAffiche.jpg')">
                    <div class="jeuInfo">
                        <div class="jeuInfoLeft">
                            <h2 class="nomJeu">RED DEAD REDEMPTION</h2>
                            <h2 class="plateformeJeu">Xbox</h2>
                            <button>AJOUTER A LA BIBLIOTHEQUE</button>
                        </div>
                    </div>
                </div>

                <div class="jeu" style="background-image:url('./assets/images/forniteAffiche.jpg')">
                    <div class="jeuInfo">
                        <div class="jeuInfoLeft">
                            <h2 class="nomJeu">Fortnite</h2>
                            <h2 class="plateformeJeu">PS5</h2>
                            <button>AJOUTER A LA BIBLIOTHEQUE</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>