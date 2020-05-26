<?php
require_once "configuration.php";
require_once CHEMIN_ACCESSEUR . "MembreDAO.php";

$titre = $_POST["pseudonyme"];
$activite = $_POST["motdepasse"];
$taille = $_POST["courriel"];
$description = $_POST["nom"];

$MESSAGE_SQL_AJOUTER_TF = 
"INSERT INTO " . "membre(pseudonyme,motdepasse,courriel,nom)"
 . "VALUES(" .
    "'" . $titre . "'," .
    "'" . $activite . "'," .
    "'" . $taille . "'," .
    "'" . $description . "'" .
");";
//echo $MESSAGE_SQL_AJOUTER_TF;

$requeteaddTF = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_AJOUTER_TF);
$reussiaddTF = $requeteaddTF->execute();

if ($reussiaddTF) {?>

    <meta http-equiv="refresh" content="2; liste-films.php">
	<link rel="stylesheet" type="text/css" href="decoration/bidulle2.css">
	<link rel="stylesheet" type="text/css" href="decoration/liste-films.css">

   <h1>Vous êtes incrit à nos membres privilèges !</h1>
    <?php
    }
    ?>
