<?php

class ModelConnexion {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function connect($usermail, $password)
    {
        $stmt = $this->pdo->prepare("SELECT id_util, password_util FROM UTILISATEUR WHERE email_util = :usermail");
        $stmt->bindValue(':usermail', $usermail);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password_util'])) {
            $_SESSION['user_id'] = $user['id_util'];
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
            $_SESSION['user_id'] = null;
        }
    }
}

?>