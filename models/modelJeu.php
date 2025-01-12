<?php

class ModelJeu {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function updateGame($id_jeu, $nom_jeu, $editeur_jeu, $date_sortie, $plateformes_jeu, $desc_jeu, $url_cover, $url_site)
    {
        $stmt = $this->pdo->prepare("UPDATE JEU SET nom_jeu = :nom_jeu, editeur_jeu = :editeur_jeu, date_sortie = :date_sortie, plateformes_jeu = :plateformes_jeu, desc_jeu = :desc_jeu, URL_cover = :url_cover, URL_site = :url_site WHERE id_jeu = :id_jeu");
        $stmt->bindParam(':id_jeu', $id_jeu);
        $stmt->bindParam(':nom_jeu', $nom_jeu);
        $stmt->bindParam(':editeur_jeu', $editeur_jeu);
        $stmt->bindParam(':date_sortie', $date_sortie);
        $stmt->bindParam(':plateformes_jeu', $plateformes_jeu);
        $stmt->bindParam(':desc_jeu', $desc_jeu);
        $stmt->bindParam(':url_cover', $url_cover);
        $stmt->bindParam(':url_site', $url_site);
        $stmt->execute();
    }

    public function getGameWithId($id_util, $id_jeu)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM BIBLIOTHEQUE INNER JOIN JEU ON BIBLIOTHEQUE.id_jeu = JEU.id_jeu WHERE id_util = :id_util AND BIBLIOTHEQUE.id_jeu = :id_jeu");
        $stmt->bindParam(':id_util', $id_util, PDO::PARAM_INT);
        $stmt->bindParam(':id_jeu', $id_jeu, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getGamePlatforms($id_jeu){
        $stmt = $this->pdo->prepare("SELECT * FROM SUPPORT AS S INNER JOIN JEU AS J ON S.id_jeu = J.id_jeu INNER JOIN PLATEFORME AS P ON P.id_plateforme = S.id_plateforme WHERE S.id_jeu = :id_jeu");
        $stmt->bindParam(':id_jeu', $id_jeu, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $result = "";

        foreach ($stmt as $plat){
            $result .= $plat['nom_plateforme']." ";
        }

        return $result;
    }

        public function removeGameFromLibrary($userId, $gameId)
    {
        $stmt = $this->pdo->prepare("DELETE FROM BIBLIOTHEQUE WHERE id_util = :userId AND id_jeu = :gameId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->execute();
    }

        public function updateNbHours($userId, $gameId, $nbHours)
    {
        $stmt = $this->pdo->prepare("UPDATE BIBLIOTHEQUE SET nb_heures_jouees = :nbHours WHERE id_util = :userId AND id_jeu = :gameId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->bindParam(':nbHours', $nbHours);
        $stmt->execute();
    }
}

?>