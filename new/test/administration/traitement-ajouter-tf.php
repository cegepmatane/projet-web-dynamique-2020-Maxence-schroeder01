<?php
include "Base_de_donnes.php";
//print_r($_POST);
//print_r($_FILES);



$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/test/illustration/";



$fichierDestination = $repertoireIllustration . $_FILES['illustration']['name'];

$fichierSource = $_FILES['illustration']['tmp_name'];
//echo $fichierSource;

if(move_uploaded_file($fichierSource,$fichierDestination))
{?>
    Votre envoi de fichier a bien fonctionné!
    <img src=" ../illustration/<?=$_FILES['illustration']['name']?>" alt="votre image"/>
    <?php
}
else
{?>
    Votre envoi à échoué !
    <?php
}



$titre = $_POST["titre"];
$activite = $_POST["activite"];
$taille = $_POST["taille"];
$description = $_POST["description"];
$origine = $_POST["origine"];



$illustration = $_FILES['illustration']['name'];

$MESSAGE_SQL_AJOUTER_TF = 
"INSERT INTO " . "transformer(titre,activite,taille,description,origine,illustration)"
 . "VALUES(" .
    "'" . $titre . "'," .
    "'" . $activite . "'," .
    "'" . $description . "'," .
    "'" . $taille . "'," .
    "'" . $origine . "'," .
    "'" . $illustration . "'" .
");";
echo $MESSAGE_SQL_AJOUTER_TF;

$requeteaddTF = $basededonnees->prepare($MESSAGE_SQL_AJOUTER_TF);
$reussiaddTF = $requeteaddTF->execute();

if ($reussiaddTF) {?>
    Votre transformers à ete add !
    <?php
    }
    ?>
    


