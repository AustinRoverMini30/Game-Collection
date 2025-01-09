<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styleGlobal.css">
    <link rel="stylesheet" href="../assets/css/styleProfil.css">
    <title>Home</title>
</head>
<body>
    <!-- HEADER -->

    <?php include './partials/header.php'; ?>

    <main>

        <?php 
        if(isset($_POST["modifierProfil"])){
            echo '<div class="clause-profil">
            <h1>Mon profil</h1>
            <form method="POST">
                <label for="nom_util">Nom :</label> <br>
                <input type="text" id="nom_util" name="nom_util" required> <br><br>

                <label for="prenom_util">Prénom :</label>  <br>
                <input type="text" id="prenom_util" name="prenom_util" required> <br><br>

                <label for="email_util">Email :</label>  <br>
                <input type="email" id="email_util" name="email_util" required> <br><br>

                <label for="password_util">Mot de passe :</label>  <br>
                <input type="password" id="password_util" name="password_util" required>  <br> <br>

                <label for="confirm_password">Confirmation du mot de passe :</label>  <br>
                <input type="password" id="confirm_password" name="confirm_password" required>  <br> <br>
                 <br>
                <form method="POST">
                    <button type="submit" name="validerModifier">MODIFIER</button>
                </form>
            </form>
        </div>';
        } elseif (isset($_POST["validerModifier"])){
            echo '<div class=clause-profil>
                    <h1>Mon profil</h1>
                    <p>Nom : $NOM <br><br> Prénom : $prenom <br><br> Email : $mail <br><br></p>
                    <form method="POST">
                        <button type="submit" name="modifierProfil">MODIFIER MON PROFIL</button> <br><br>
                    </form>
                    <button>SUPPRIMER MON COMPTE</button> <br><br>
                    <button>SE DECONNECTER</button>
                </div>';
        } else {
            echo '<div class=clause-profil>
                    <h1>Mon profil</h1>
                    <p>Nom : $NOM <br><br> Prénom : $prenom <br><br> Email : $mail <br><br></p>
                    <form method="POST">
                        <button type="submit" name="modifierProfil">MODIFIER MON PROFIL</button> <br><br>
                    </form>
                    <button>SUPPRIMER MON COMPTE</button> <br><br>
                    <button>SE DECONNECTER</button>
                </div>';
        }
        ?>
        

    </main>

</body>
</html>