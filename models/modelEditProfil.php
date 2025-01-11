<?php

class ModelEditProfil {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function updateUser($userId, $nom, $prenom, $mail)
    {
        $stmt = $this->pdo->prepare("UPDATE UTILISATEUR SET nom_util = :nom, prenom_util = :prenom, email_util = :mail WHERE id_util = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
    }

    public function updatePwd($userId, $pwd)
    {
        $stmt = $this->pdo->prepare("UPDATE UTILISATEUR SET password_util = :pwd WHERE id_util = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':pwd', password_hash($pwd, PASSWORD_BCRYPT));
        $stmt->execute();
    }

    public function getUser($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM UTILISATEUR WHERE id_util = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteUser($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM UTILISATEUR WHERE id_util = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

}

?>