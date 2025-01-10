<?php

class ModelInscription {
    public function addUser($nom, $prenom, $mail, $pwd)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("INSERT INTO UTILISATEUR (nom_util, prenom_util, email_util, password_util) VALUES (:nom, :prenom, :mail, :pwd)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':pwd', password_hash($pwd, PASSWORD_BCRYPT));
        $stmt->execute();
    }
}

?>