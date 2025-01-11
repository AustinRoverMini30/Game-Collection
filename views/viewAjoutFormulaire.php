<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleAjoutFormulaire.css">
    <title>Ajout d'un nouveau jeu</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>

        <div id="ajoutFormulaire">
            <h2 id="ajoutTitre">Ajouter un jeu à la bibliothèque</h2>
            <p>Le jeu que vous souhaitez ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouté à votre bibliothèque !</p>

            <form action="formulaireAjout" method="POST">
                <div>
                    <h3>Nom du jeu</h3>
                    <input type="text" name="nomJeu" id="nomJeu" placeholder="Nom du jeu" required class="inputText" required>
                </div>
                <div>
                    <h3>Editeur du jeu</h3>
                    <input type="text" name="editeurJeu" id="editeurJeu" placeholder="Editeur du jeu" required required class="inputText" required>
                </div>
                <div>
                    <h3>Sortie du jeu</h3>
                    <input type="date" name="sortieJeu" id="sortieJeu" required class="inputText" required>
                </div>
                <div>
                    <h3>Plateformes</h3>
                    <div>
                        <input type="checkbox" name="plateforme" id="plateforme" value="Playstation">
                        <label for="plateforme">Playstation</label>
                    </div>
                    <div>
                        <input type="checkbox" name="plateforme" id="plateforme" value="Xbox">
                        <label for="plateforme">Xbox</label>
                    </div>
                    <div>
                        <input type="checkbox" name="plateforme" id="plateforme" value="Nintendo">
                        <label for="plateforme">Nintendo</label>
                    </div>
                    <div>
                        <input type="checkbox" name="plateforme" id="plateforme" value="PC">
                        <label for="plateforme">PC</label>
                    </div>
                </div>
                <div>
                    <h3>Description du jeu</h3>
                    <textarea name="descriptionJeu" id="descriptionJeu" placeholder="Description du jeu" required required class="inputText" required></textarea>
                </div>
                <div>
                    <h3>URL de la cover</h3>
                    <input type="url" name="coverJeu" id="coverJeu" placeholder="URL de la cover" required required class="inputText" required>
                </div>
                <div>
                    <h3>URL du site</h3>
                    <input type="url" name="siteJeu" id="siteJeu" placeholder="URL du site" required required class="inputText" required>
                </div>

                <button id="buttonAjout">AJOUTER LE JEU</button>
            </form>

        </div>

        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>