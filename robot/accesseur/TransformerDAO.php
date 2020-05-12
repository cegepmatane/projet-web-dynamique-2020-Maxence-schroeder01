<?php
require_once CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

class TransformerDAO
{
    public static function lireTransformer($id)
    {
        $MESSAGE_SQL_TF ="SELECT * FROM transformer WHERE id=" . $id; 
        
        
        //echo $MESSAGE_SQL_TF;

        $requeteTF2 = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_TF);
        $requeteTF2->bindParam(':id', $id , PDO::PARAM_INT);
        
        
        $requeteTF2->execute();
        $TF = $requeteTF2->fetch();

        return $TF;

    }

    public static function ajouterTF($transformer){

        $MESSAGE_SQL_AJOUTER_TF = 
        "INSERT INTO " . "transformer(titre,activite,taille,description,origine,illustration)"
         . "VALUES(" .
            ":titre," .
            ":activite," .
            ":taille," .
            ":description," .
            ":origine," .
            ":illustration" .
        ");";
        
        $requeteaddTF = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_AJOUTER_TF);
        $requeteaddTF->bindParam(':titre', $transformer['titre'], PDO::PARAM_STR);
        $requeteaddTF->bindParam(':activite', $transformer['activite'], PDO::PARAM_STR);
        $requeteaddTF->bindParam(':taille', $transformer['taille'], PDO::PARAM_STR);
        $requeteaddTF->bindParam(':description', $transformer['description'], PDO::PARAM_STR);
        $requeteaddTF->bindParam(':origine', $transformer['origine'], PDO::PARAM_STR);
        $requeteaddTF->bindParam(':illustration', $transformer['illustration'], PDO::PARAM_STR);

        $reussiaddTF = $requeteaddTF->execute();

        
        return $reussiaddTF;


    }
    public static function Supprimertf($id){

        $MESSAGE_SQL_TF2 = "DELETE FROM transformer WHERE id=" . $id; 
        //echo  $MESSAGE_SQL_TF2;
       
       
        $requeteTF2 = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_TF2);
        $requeteTF2->execute();
        $reussiDELTF = $requeteTF2->fetch();
       //print_r($TF);
       //echo $id;

        return $reussiDELTF;

    }
    public static function modiftf($id){

        $MESSAGE_SQL_TF2 = "SELECT * FROM transformer WHERE id=" . $id; 
        //echo  $MESSAGE_SQL_TF2;
       
       
        $requeteTF2 = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_TF2);
        $requeteTF2->execute();
        $TF = $requeteTF2->fetch();
       //print_r($TF);
       //echo $id;

        return $TF;




    }

    public static function lireall(){

        $MESSAGE_SQL_LISTE_TF = "SELECT * FROM transformer";
        //echo $MESSAGE_SQL_LISTE_TF;
        
        $requeteListeTF = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LISTE_TF);
        $requeteListeTF->execute();
        $listeTF = $requeteListeTF->fetchAll();

        return $listeTF;




    }
    public static function rechercher($search)
    {
        $MESSAGE_SQL_SEARCH_TF = "SELECT * FROM transformer WHERE description LIKE '%$search%' OR Activite LIKE '%$search%' OR titre LIKE '%$search%'";

        //echo $MESSAGE_SQL_SEARCH_TF;

        $requeteListeSTF = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_SEARCH_TF);
    $requeteListeSTF->execute();
    $searchTF = $requeteListeSTF->fetchAll();
    
    return $searchTF;

    }

    public static function rechercherAV($titre,$activite,$description,$taille,$origine)
    {
        $MESSAGE_SQL_SEARCH_AV_TF ="SELECT * FROM transformer WHERE titre LIKE '%$titre%' AND Activite LIKE '%$activite%' AND description LIKE '%$description%' AND taille LIKE '%$taille%' AND origine LIKE '%$origine%'";

        //echo $MESSAGE_SQL_SEARCH_AV_TF;
        $requeteListeSTF = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_SEARCH_AV_TF);
        $requeteListeSTF->execute();
        $searchTFAV = $requeteListeSTF->fetchAll();

        return $searchTFAV;

    }
} 
?>