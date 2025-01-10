<?php

class ModelAjoutFormulaire {
    public function addGame($nom_jeu, $editeur_jeu, $date_sortie, $plateformes_jeu, $desc_jeu, $url_cover, $url_site)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("INSERT INTO JEU (nom_jeu, editeur_jeu, date_sortie, plateformes_jeu, desc_jeu, URL_cover, URL_site) VALUES (:nom_jeu, :editeur_jeu, :date_sortie, :plateformes_jeu, :desc_jeu, :url_cover, :url_site)");
        $stmt->bindParam(':nom_jeu', $nom_jeu);
        $stmt->bindParam(':editeur_jeu', $editeur_jeu);
        $stmt->bindParam(':date_sortie', $date_sortie);
        $stmt->bindParam(':plateformes_jeu', $plateformes_jeu);
        $stmt->bindParam(':desc_jeu', $desc_jeu);
        $stmt->bindParam(':url_cover', $url_cover);
        $stmt->bindParam(':url_site', $url_site);
        $stmt->execute();
    }

}

?>