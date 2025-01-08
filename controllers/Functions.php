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

        $stmt = $pdo->prepare("SELECT id_util, password_util FROM UTILISATEUR WHERE email_util = :usermail");
        $stmt->bindValue(':usermail', $usermail);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_util'])) {
            $_SESSION['user_id'] = $user['id_util'];
            exit;
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }

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

    public function getAllGames()
    {
        return $this->conn->sendRequest("SELECT * FROM JEU");
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

    public function getLibrary($id)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("SELECT * FROM BIBLIOTHEQUE INNER JOIN JEU ON BIBLIOTHEQUE.id_jeu = JEU.id_jeu WHERE id_util = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addGameToLibrary($userId, $gameId)
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("INSERT INTO BIBLIOTHEQUE (id_util, id_jeu, nb_heures_jouees) VALUES (:userId, :gameId, 0)");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':gameId', $gameId);
        $stmt->execute();
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

    public function getClassement()
    {
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("SELECT nom_util, prenom_util, SUM(nb_heures_jouees) as total FROM BIBLIOTHEQUE INNER JOIN UTILISATEUR ON BIBLIOTHEQUE.id_util = UTILISATEUR.id_util GROUP BY BIBLIOTHEQUE.id_util ORDER BY total DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getIdentity(){
        $pdo = $this->conn->getPdo();
        $stmt = $pdo->prepare("SELECT prenom_util FROM UTILISATEUR WHERE id_util = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>