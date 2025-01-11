<?php

class ModelAjout {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function addGameToLibrary($userId, $gameId)
    {

        $stmt = $this->pdo->prepare("SELECT * FROM BIBLIOTHEQUE WHERE id_util = :userId AND id_jeu = :gameId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->execute();

        if (!isset($stmt->fetch(PDO::FETCH_ASSOC)['id_util'])) {
            $stmt = $this->pdo->prepare("INSERT INTO BIBLIOTHEQUE (id_util, id_jeu, nb_heures_jouees) VALUES (:userId, :gameId, 0)");
            $stmt->bindParam(':userId', $userId);
            $stmt->bindParam(':gameId', $gameId);
            $stmt->execute();
        }
    }

    public function getAllGamesMatches($search)
    {
        $search = "%".$search."%";
        $stmt = $this->pdo->prepare("SELECT * FROM BIBLIOTHEQUE RIGHT JOIN JEU ON BIBLIOTHEQUE.id_jeu = JEU.id_jeu WHERE (id_util IS NULL OR id_util = :id) AND nom_jeu LIKE :search");
        $stmt->bindParam(':search', $search);
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        $stmt = $stmt->fetchAll();

        $result = "";

        if ($search == "%%") {
            $result .= "<h2 id=\"résultatsTitre\">Jeux disponibles</h2>";
        }else{
            $result = "<h2 id=\"résultatsTitre\">Résultats de la recherche</h2>";
        }

        $result .= "<div id=\"resultatJeux\">";

        foreach ($stmt as $row) {
        $result .= "    <div class=\"jeu\" style=\"background-image:url('".$row['URL_cover']."')\">";
        $result .= "        <div class=\"jeuInfo\">";

        if (isset($row['id_util'])) {
            $result .= "                <form action='jeu' method='POST' class=\"jeuInfoLeft\">";
        }else{
            $result .= "                <form action='ajout' method='POST' class=\"jeuInfoLeft\">";
        }

        $result .= "                    <input type=\"hidden\" name=\"idJeu\" value=\"".$row['id_jeu']."\">";
        $result .= "                    <h2 class=\"nomJeu\">".$row['nom_jeu']."</h2>";
        $result .= "                    <h2 class=\"plateformeJeu\">".$row['plateformes_jeu']."</h2>";

        if (isset($row['id_util'])) {
            $result .= "                    <button type=\"submit\" class=\"boutonAjouter\">JEU POSSÉDÉ</button></form>";
        }else{
            $result .= "                    <button type=\"submit\" class=\"boutonAjouter\">AJOUTER A LA BIBLIOTHEQUE</button></form>";
        }
        $result .= "        </div>";
        $result .= "    </div>";

        }

        $result .= "</div>";

        return $result;
    }
}

?>