<!DOCTYPE html>
<html lang="fr">
<l>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  <link rel="stylesheet" href="../assets/css/styleGlobal.css">
  <link rel="stylesheet" href="../assets/css/styleConnexion.css">
</head>
<body class="connexion">

    <?php include 'partials/header.php'; ?>

    <main>
        <div class="form-container">
            <h2>Se connecter à Game Collection</h2>
            <form action="connexion" method="POST" id="formulaireConnexion">
                <label for="email_util">Email :</label>
                <input type="email" id="email_util" name="email_util" required class="inputText">

                <label for="password_util">Mot de passe :</label>
                <input type="password" id="password_util" name="password_util" required class="inputText">

                <button type="submit" id="buttonConnexion">SE CONNECTER</button>

                <a href="inscription" id="inscription">S'inscrire</a>
            </form>
        </div> 

        <?php include 'partials/footer.php'; ?>
    </main>
</body>
</html>
