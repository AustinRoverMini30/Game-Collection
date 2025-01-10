<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="form-container">
        <h1>Inscription</h1>
        <form action="inscription" method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">S'INSCRIRE</button>

            <a href="connexion">Se connecter</a>
        </form>
    </div>
</body>
</html>