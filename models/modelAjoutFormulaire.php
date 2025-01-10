<?php

class ModelAjoutFormulaire {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function addGame($nom_jeu, $editeur_jeu, $date_sortie, $plateformes_jeu, $desc_jeu, $url_cover, $url_site)
    {

        $stmt = $this->pdo->prepare("SELECT * FROM JEU WHERE nom_jeu = :nom_jeu");
        $stmt->bindParam(':nom_jeu', $nom_jeu);
        $stmt->execute();

        if ($stmt->rowCount() > 0){
            $stmt = $this->pdo->prepare("DELETE FROM JEU WHERE nom_jeu = :nom_jeu");
            $stmt->bindParam(':nom_jeu', $nom_jeu);
            $stmt->execute();
        }

        $stmt = $this->pdo->prepare("INSERT INTO JEU (nom_jeu, editeur_jeu, date_sortie, plateformes_jeu, desc_jeu, URL_cover, URL_site) VALUES (:nom_jeu, :editeur_jeu, :date_sortie, :plateformes_jeu, :desc_jeu, :url_cover, :url_site)");
        $stmt->bindParam(':nom_jeu', $nom_jeu);
        $stmt->bindParam(':editeur_jeu', $editeur_jeu);
        $stmt->bindParam(':date_sortie', $date_sortie);
        $stmt->bindParam(':plateformes_jeu', $plateformes_jeu);
        $stmt->bindParam(':desc_jeu', $desc_jeu);
        $stmt->bindParam(':url_cover', $url_cover);
        $stmt->bindParam(':url_site', $url_site);
        $stmt->execute();
    }

    public function addGameToLibrary($userId, $gameName)
    {
        $stmt = $this->pdo->prepare("SELECT id_jeu FROM JEU WHERE nom_jeu = :gameName");
        $stmt->bindParam(':gameName', $gameName);
        $stmt->execute();
        $gameId = $stmt->fetch(PDO::FETCH_ASSOC)['id_jeu'];

        $stmt = $this->pdo->prepare("INSERT INTO BIBLIOTHEQUE (id_util, id_jeu, nb_heures_jouees) VALUES (:userId, :gameId, 0)");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->execute();
    }

}

?>