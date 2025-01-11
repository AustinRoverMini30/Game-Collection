<?php

class ModelInscription {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function addUser($nom, $prenom, $mail, $pwd)
    {
        $stmt = $this->pdo->prepare("SELECT email_util FROM UTILISATEUR WHERE email_util = :mail");
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
        
        if (!isset(($stmt->fetch(PDO::FETCH_ASSOC))['email_util'])){
            $stmt = $this->pdo->prepare("INSERT INTO UTILISATEUR (nom_util, prenom_util, email_util, password_util) VALUES (:nom, :prenom, :mail, :pwd)");
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':pwd', password_hash($pwd, PASSWORD_BCRYPT));
            $stmt->execute();

            return true;
        }
        return false;
    }
}

?>