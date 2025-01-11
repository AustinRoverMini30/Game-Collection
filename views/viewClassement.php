<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleClassement.css">
    <title>Home</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>
        <div class="bloc-classement">
            <h1>Classement des temps passés</h1>
            <table>
                <tr class="niv1">
                    <th>Joueur</th>
                    <th>Temps passés</th>
                    <th>Jeu favori</th>
                </tr>
                <tr class="niv1">
                    <td>Nicolas</td>
                    <td>120h</td>
                    <td>Sybéria</td>
                </tr>
                <tr class="niv2">
                    <td>Lou</td>
                    <td>90h</td>
                    <td>Genshin Impact</td>
                </tr>
                <tr class="niv1">
                    <td>Justine</td>
                    <td>300h</td>
                    <td>Cell's to singularity</td>
                </tr>
            </table> 
        </div>
        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>