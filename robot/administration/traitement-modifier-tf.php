<?php
//print_r($_POST);
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";

include "Haut.php"; 
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
    Votre envoi d'image à échoué !
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

$requetemodTF = BaseDeDonnees::getConnexion()->prepare($MESSAGE_SQL_MODIFIER_TF);
$reussimodTF = $requetemodTF->execute();

if ($reussimodTF) {?>
    <meta http-equiv="refresh" content="2; liste-films.php">
    Votre transformers à été modifié !
    Redirection vers l'acceuil dans 5 secondes.
    <?php
    }

include "Bas.php";
    ?>
