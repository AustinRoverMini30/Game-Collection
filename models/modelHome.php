<?php

class modelHome {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getLibrary($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM BIBLIOTHEQUE INNER JOIN JEU ON BIBLIOTHEQUE.id_jeu = JEU.id_jeu WHERE id_util = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $result = "";

        foreach ($stmt as $row) {
            $result .= "<form action='jeu' method='post' class='jeu' style='background-image:url(".$row['URL_cover'].")'>";
            $result .= "    <input type='hidden' name='idJeu' value='".$row['id_jeu']."'>";
            $result .= "    <button type='submit' style='all: unset; cursor: pointer; width: 100%; height: 100%;'>";
            $result .= "        <span class='jeuInfo'>";
            $result .= "            <span class='jeuInfoLeft'>";
            $result .= "                <span class='nomJeu'>".$row['nom_jeu']."</span>";
            $result .= "                <span class='plateformeJeu'>".$row['plateformes_jeu']."</span>";
            $result .= "            </span>";
            $result .= "            <span class='jeuInfoRight'>";
            $result .= "                <span class='heureJouees'>".$row['nb_heures_jouees']." h</span>";
            $result .= "            </span>";
            $result .= "        </span>";
            $result .= "    </button>";
            $result .= "</form>";
        }
        
        return $result;
    }

    public function getIdentity(){
        $stmt = $this->pdo->prepare("SELECT prenom_util FROM UTILISATEUR WHERE id_util = :id");
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC)["prenom_util"];
    }
}

?>