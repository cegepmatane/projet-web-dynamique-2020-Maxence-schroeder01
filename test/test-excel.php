<?php
    namespace OneSheet;
    require_once 'lib/onesheet/autoload.php';  
    require_once "configuration.php";
    require_once CHEMIN_ACCESSEUR . "BaseDeDonnees.php";

    $MESSAGE_SQL_LISTE_TF = "SELECT * FROM transformer";
    //echo $MESSAGE_SQL_LISTE_TF;
    
    $requeteListeTF = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_LISTE_TF);
    $requeteListeTF->execute();
    $listeTF = $requeteListeTF->fetchAll();
    
    $tableur = new Writer('');
    $tableur->addRow(array($listeTF['titre']));
    $tableur->addRow(array('Retour vers le futur', '150 minutes'));    
    $tableur->writeToFile('rosen.xlsx');
    class BaseDeDonnees{
        public static function getConnexion(){
    
    $usager = 'root';
    $motdepasse = 'Max14@Prime@';//ou " Max14@Prime@ " à toi de test
    $hote = 'localhost';
    $base = 'Transformers';
    
    $dsn = 'mysql:dbname=' . $base . ';host=' . $hote;
    $connexion = new PDO($dsn, $usager, $motdepasse);
    return $connexion;
        }
    }
?> 
