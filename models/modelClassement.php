<?php

class ModelClassement {
    public function getClassement()
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("SELECT nom_util, prenom_util, SUM(nb_heures_jouees) as total FROM BIBLIOTHEQUE INNER JOIN UTILISATEUR ON BIBLIOTHEQUE.id_util = UTILISATEUR.id_util GROUP BY BIBLIOTHEQUE.id_util ORDER BY total DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>