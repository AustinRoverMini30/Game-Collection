<?php

class ModelClassement {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getClassement()
    {
        $stmt = $this->pdo->prepare("SELECT U.nom_util, U.prenom_util, B.nb_heures_jouees, J.nom_jeu FROM BIBLIOTHEQUE AS B INNER JOIN UTILISATEUR AS U ON B.id_util = U.id_util INNER JOIN JEU AS J ON J.id_jeu = B.id_jeu GROUP BY B.id_util HAVING B.nb_heures_jouees ORDER BY B.nb_heures_jouees DESC LIMIT 20");
        $stmt->execute();
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $result = "";
        $val = 1;

        foreach ($stmt as $row){
            $result .= "<tr class=\"niv".$val."\">";
            $result .= "<td>".$row['prenom_util']." ".$row['nom_util']."</td>";
            $result .= "<td>".$row['nb_heures_jouees']." h</td>";
            $result .= "<td>".$row['nom_jeu']."</td>";
            $result .= "</tr>";

            $val = ($val + 1) % 2;
        }

        return $result;
    }
}

?>