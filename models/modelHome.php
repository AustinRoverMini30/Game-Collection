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

            $result .= "    <div class=\"jeu\" style=\"background-image:url('".$row['URL_cover']."')\">";
            $result .= "        <div class=\"jeuInfo\">";
            $result .= "            <div class=\"jeuInfoLeft\">";
            $result .= "                <h2 class=\"nomJeu\">".$row['nom_jeu']."</h2>";
            $result .= "                <h2 class=\"plateformeJeu\">".$row['plateformes_jeu']."</h2>";
            $result .= "            </div>";
            $result .= "            <div class=\"jeuInfoRight\">";
            $result .= "                <h2 class=\"heureJouees\">".$row['nb_heures_jouees']." h</h2>";
            $result .= "            </div>";
            $result .= "        </div>";
            $result .= "    </div>";
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