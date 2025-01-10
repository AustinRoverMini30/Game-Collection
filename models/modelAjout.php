<?php

class ModelAjout {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function addGameToLibrary($userId, $gameId)
    {
        $stmt = $this->pdo->prepare("INSERT INTO BIBLIOTHEQUE (id_util, id_jeu, nb_heures_jouees) VALUES (:userId, :gameId, 0)");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->execute();
    }

    public function getAllGamesMatches($search)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM JEU WHERE nom_jeu LIKE :search");
        $stmt->bindParam(':search', $search);
        $stmt->execute();
        $stmt = $stmt->fetchAll();

        $result = "";

        foreach ($stmt as $row) {
        $result .= "    <div class=\"jeu\" style=\"background-image:url('".$row['URL_cover']."')\">";
        $result .= "        <div class=\"jeuInfo\">";
        $result .= "            <div class=\"jeuInfoLeft\">";
        $result .= "                <h2 class=\"nomJeu\">".$row['nom_jeu']."</h2>";
        $result .= "                <h2 class=\"plateformeJeu\">".$row['plateformes_jeu']."</h2>";
        $result .= "                <button class=\"boutonAjouter\">AJOUTER A LA BIBLIOTHEQUE</button>";
        $result .= "            </div>";
        $result .= "        </div>";
        $result .= "    </div>";

        }

        return $result;
    }
}

?>