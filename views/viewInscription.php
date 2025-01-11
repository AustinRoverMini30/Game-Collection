<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./assets/css/styleGlobal.css">
    <link rel="stylesheet" href="./assets/css/styleInscription.css">
</head>
<body>

    <?php include './views/partials/header.php'; ?>

    <main>
        <div class="form-container">
            <h2>Inscription</h2>
            <form action="inscription" method="POST" id="formulaireInscription">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required class="inputText">

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required class="inputText">

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required class="inputText">

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required class="inputText">

                <label for="confirm_password">Confirmation du mot de passe :</label>
                <input type="password" id="confirm_password" name="confirm_password" required class="inputText">

                <button type="submit" id="buttonInscription">S'INSCRIRE</button>

                <a href="connexion" id="connexion">Se connecter</a>
            </form>
        </div>

        <?php include './views/partials/footer.php'; ?>
    </main>
</body>
</html>