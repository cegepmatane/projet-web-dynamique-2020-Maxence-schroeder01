<?php
require_once CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

class MembreDAO
{
    public static function ajouterMB($membre)
    {
        $MESSAGE_SQL_AJOUTER_MB = 
        "INSERT INTO " . "membre(pseudonyme,motdepasse,courriel,nom)"
         . "VALUES(" .
            ":pseudonyme," .
            ":motdepasse," .
            ":courriel," .
            ":nom," .
        ");";

        $requeteaddTF = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_AJOUTER_MB);
        $reussiaddTF = $requeteaddTF->execute();
        return $reussiaddTF;

    }
}