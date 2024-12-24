<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styleHome.css">
    <title>Home</title>
</head>
<body>
    <!-- HEADER -->
    <header>
    <div class="container">
        <div id="logo">
            <a href="viewHome.php"><image id="logoDuSite" src="" alt="Logo du site web"/> </a>
        </div>
        <div id="navigation">
            <a href="viewBibliotheque.php"><button id="maBibliotheque">MA BIBLIOTHEQUE</button></a>
            <a href="viewAjout.php"><button id="ajouter1Jeu">AJOUTER UN JEU</button></a>
            <a href="viewClassements.php"><button id="classemenT">CLASSEMENT</button></a>
            <a href="viewProfil.php"><button id="profil">PROFIL</button></a> 
        </div>

    </div>
    </header>

    <main>
        <div id="banniereSalutation">
            <img id="imgBackground" src="../assets/images/banniereExemple.jpeg" alt="image rectangulaire prenant toute la largeur de l'écran"/>
            <h1 id="l1BS">SALUT PRENOM !<br>PRÊT A AJOUTER DES<br>JEUX A TA COLLECTION ?</h1>
        </div>

        <div id="mesJeux">
            <h2>Mes jeux</h2>
            <div class="jeu">
                <img class="jeuBackground" src="../assets/images/minecraftAffiche.jpg" alt="couverture deMinecraft"/> <br>
                <h1 class="nomJeu">Minecraft</h1>
                <p class="heureJouees">120 heures</p> <br>
                <p class="plateformeJeu">Xbox</p>
            </div>

            <div class="jeu">
                <img class="jeuBackground" src="../assets/images/forniteAffiche.jpg" alt="couverture deFortnite"/> <br>
                <h1 class="nomJeu">Fortnite</h1>
                <p class="heureJouees">200 heures</p> <br>
                <p class="plateformeJeu">PS5</p>
            </div>
        </div>

    </main>

    <!-- FOOTER -->
    <footer>
        <p>Game Collection - 2024 - Tous droits réservés</p>
    </footer>
</body>
</html>