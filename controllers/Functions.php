<?php

class Functions
{

    public function deleteUser($id)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("DELETE FROM UTILISATEUR WHERE id_util = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateUser($userId, $nom, $prenom, $mail)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("UPDATE UTILISATEUR SET nom_util = :nom, prenom_util = :prenom, email_util = :mail WHERE id_util = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
    }

    public function updatePwd($userId, $pwd)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("UPDATE UTILISATEUR SET password_util = :pwd WHERE id_util = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':pwd', password_hash($pwd, PASSWORD_BCRYPT));
        $stmt->execute();
    }

    public function getGameWithName($name)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("SELECT * FROM JEU WHERE nom_jeu = :name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getGameWithId($id)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("SELECT * FROM JEU WHERE id_jeu = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function removeGameFromLibrary($userId, $gameId)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("DELETE FROM BIBLIOTHEQUE WHERE id_util = :userId AND id_jeu = :gameId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->execute();
    }

    public function updateNbHours($userId, $gameId, $nbHours)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("UPDATE BIBLIOTHEQUE SET nb_heures_jouees = :nbHours WHERE id_util = :userId AND id_jeu = :gameId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->bindParam(':nbHours', $nbHours);
        $stmt->execute();
    }
}

?>