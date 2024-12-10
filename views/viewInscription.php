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
        <form action="#" method="POST">
            <label for="nom_util">Nom :</label>
            <input type="text" id="nom_util" name="nom_util" required>

            <label for="prenom_util">Prénom :</label>
            <input type="text" id="prenom_util" name="prenom_util" required>

            <label for="email_util">Email :</label>
            <input type="email" id="email_util" name="email_util" required>

            <label for="password_util">Mot de passe :</label>
            <input type="password" id="password_util" name="password_util" required>

            <label for="confirm_password">Confirmation du mot de passe :</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">S'INSCRIRE</button>

            <a href="#">Se connecter</a>
        </form>
    </div>
</body>
</html>