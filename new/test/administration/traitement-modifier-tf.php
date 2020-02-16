<?php
include "Base_de_donnes.php";
//print_r($_POST);

$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/test/illustration/";

$id = $_POST["id"];

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

$MESSAGE_SQL_MODIFIER_TF = 
"UPDATE transformer SET titre='$titre',activite='$activite',description='$description',taille='$taille',origine='$origine',illustration='$illustration' WHERE id=".$id;

//echo $MESSAGE_SQL_MODIFIER_TF;

$requetemodTF = $basededonnees->prepare($MESSAGE_SQL_MODIFIER_TF);
$reussimodTF = $requetemodTF->execute();

if ($reussimodTF) {?>
    Votre films à ete modifié!
    <?php
    }
    ?>
