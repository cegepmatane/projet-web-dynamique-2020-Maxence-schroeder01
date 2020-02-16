<?php
include "Base_de_donnes.php";
//print_r($_POST);

$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/test/illustration/";

$id = $_POST["id"];

$MESSAGE_SQL_DELETE_TF = 
"DELETE FROM transformer  WHERE id=".$id;

//echo $MESSAGE_SQL_DELETE_TF;

$requeteDELTF = $basededonnees->prepare($MESSAGE_SQL_DELETE_TF);
$reussiDELTF = $requeteDELTF->execute();

if ($reussiDELTF) {?>
    Votre films à ete supprimer!
    <?php
    }
    ?>
