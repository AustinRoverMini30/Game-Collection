<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleJeu.css">
    <title>Home</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>
        <div id="jeu">
            <div id="left">
                <div>
                    <h2>Red dead redemption 2</h2>
                    <p>Jeu trop cool</p>
                    <p>Temps passé : 60 h</p>
                </div>

                <div id="formulaire">
                    <h2>Ajouter du temps passé sur le jeu</h2>

                    <h3>Temps passé sur le jeu</h3>
                    <input type="number" name="tempsJeu" id="tempsJeu" placeholder="Temps passé sur le jeu" required class="inputText">

                    <button class="buttonForm">AJOUTER</button>
                    <button class="buttonForm">SUPPRIMER LE JEU DE MA BIBLIOTHEQUE</button>
                </div>
            </div>
            <div id="right">
                <img src="./assets/images/minecraftAffiche.jpg" alt="">
            </div>
        </div>

        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>