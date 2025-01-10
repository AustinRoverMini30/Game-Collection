<?php

class ModelAjout {
    public function addGameToLibrary($userId, $gameId)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("INSERT INTO BIBLIOTHEQUE (id_util, id_jeu, nb_heures_jouees) VALUES (:userId, :gameId, 0)");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->execute();
    }

    public function getAllGames()
    {
        return $this->conn->sendRequest("SELECT * FROM JEU");
    }
}

?>