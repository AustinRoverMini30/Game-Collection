<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleJeu.css">
    <title><?php echo $result['nom_jeu'] ?></title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>
        <div id="jeu">
            <div id="left">
                <div>
                    <h2><?php echo $result['nom_jeu'] ?></h2>
                    <p><?php echo $result['plateformes_jeu'] ?></p>
                    <p>Temps passé : <?php echo $result['nb_heures_jouees'] ?> h</p>
                </div>

                <form action="jeu" method="post" id="formulaire">
                    <h2>Ajouter du temps passé sur le jeu</h2>

                    <h3>Temps passé sur le jeu</h3>
                    <input type="number" name="tempsJeu" id="tempsJeu" placeholder="Temps passé sur le jeu" required class="inputText" value="<?php echo $result['nb_heures_jouees'] ?>">

                    <input type="hidden" name="idJeu" value="<?php echo $result['id_jeu'] ?>">

                    <button class="buttonForm" type="submit" name="update">AJOUTER</button>
                    <button class="buttonForm" type="submit" name="delete">SUPPRIMER LE JEU DE MA BIBLIOTHEQUE</button>
                </form>
            </div>
            <div id="right">
                <img src="<?php echo $result['URL_cover'] ?>" alt="">
            </div>
        </div>

        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>