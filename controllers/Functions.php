<?php

class Functions
{

    private $conn;

    public function __construct($dbname, $username, $password)
    {
        $this->conn = new DataBaseProcessor($dbname, $username, $password);
    }

    public function connect($usermail, $password)
    {

        $pdo = $this->conn->getPdo();

        $stmt = $pdo->prepare("SELECT Id_user, Password_user FROM UTILISATEUR WHERE $usermail = :usermail");
        $pdo->blindValue($stmt, ':usermail', $usermail);
        $pdo->execute($stmt);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['Password_user'])) {
            $stmt->bindParam(':id', $user['Id_user']);
            $stmt->execute();

            $_SESSION['user_id'] = $user['Id_user'];

            exit;
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }

    public function addUser($nom, $prenom, $mail, $pwd){
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("INSERT INTO UTILISATEUR (Nom_user, Prenom_user, Mail_user, Password_user) VALUES (:nom, :prenom, :mail, :pwd)");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':pwd', password_hash($pwd, PASSWORD_BCRYPT));
        $stmt->execute();
    }

    public function deleteUser($id){
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("DELETE FROM UTILISATEUR WHERE Id_user = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function updateUser($userId, $nom, $prenom, $mail){
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("UPDATE UTILISATEUR SET Nom_user = :nom, Prenom_user = :prenom, Mail_user = :mail WHERE Id_user = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':mail', $mail);
        $stmt->execute();
    }

    public function updatePwd($userId, $pwd){
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("UPDATE UTILISATEUR SET Password_user = :pwd WHERE Id_user = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':pwd', password_hash($pwd, PASSWORD_BCRYPT));
        $stmt->execute();
    }

    public function addGame($nom_jeu, $editeur_jeu, $date_sortie, $desc_jeu, $url_cover, $url_site){
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("INSERT INTO JEU (Nom_jeu, Editeur_jeu, Date_sortie, Description_jeu, Url_cover, Url_site) VALUES (:nom_jeu, :editeur_jeu, :date_sortie, :desc_jeu, :url_cover, :url_site)");
        $stmt->bindParam(':nom_jeu', $nom_jeu);
        $stmt->bindParam(':editeur_jeu', $editeur_jeu);
        $stmt->bindParam(':date_sortie', $date_sortie);
        $stmt->bindParam(':desc_jeu', $desc_jeu);
        $stmt->bindParam(':url_cover', $url_cover);
        $stmt->bindParam(':url_site', $url_site);
        $stmt->execute();
    }

}

?>