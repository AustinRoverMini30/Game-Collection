<?php

class ModelJeu {
    public function updateGame($id_jeu, $nom_jeu, $editeur_jeu, $date_sortie, $plateformes_jeu, $desc_jeu, $url_cover, $url_site)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("UPDATE JEU SET nom_jeu = :nom_jeu, editeur_jeu = :editeur_jeu, date_sortie = :date_sortie, plateformes_jeu = :plateformes_jeu, desc_jeu = :desc_jeu, URL_cover = :url_cover, URL_site = :url_site WHERE id_jeu = :id_jeu");
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
}

?>