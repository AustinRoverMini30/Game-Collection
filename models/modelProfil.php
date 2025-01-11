<?php

class ModelProfil {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function deleteUser($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM UTILISATEUR WHERE id_util = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getUser($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM UTILISATEUR WHERE id_util = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}

?>