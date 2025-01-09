<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <title>Home</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './views/partials/header.php'; ?>

    <main>
        <div class="bloc-classement">
            <h1>Classement des temps passés</h1>
            <table>
                <tr>
                    <th>Joueur</th>
                    <th>Temps passés</th>
                    <th>Jeu favori</th>
                </tr>
            </table>
            
        </div>
        <!-- FOOTER -->
        <?php include './views/partials/footer.php'; ?>

    </main>

</body>
</html>