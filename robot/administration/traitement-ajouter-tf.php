<?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";
require_once '../lib/simpleimage/SimpleImage.php';      
$repertoireIllustration = $_SERVER['DOCUMENT_ROOT'] . "/test/illustration/";
$fichierDestination = $repertoireIllustration . $_FILES['illustration']['name'];
$illustration = $_FILES['illustration']['name'];
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
$filtresTF = [];
$filtresTF['titre'] = FILTER_SANITIZE_ENCODED;
$filtresTF['activite'] = FILTER_SANITIZE_ENCODED;
$filtresTF['taille'] = FILTER_VALIDATE_INT;
$filtresTF['description'] = FILTER_SANITIZE_ENCODED;
$filtresTF['origine'] = FILTER_SANITIZE_ENCODED;
$transformer = filter_input_array(INPUT_POST, $filtresTF);
$transformer['illustration'] = $illustration;
$reussiaddTF = TransformerDAO::ajouterTF($transformer);

/*
$image = new SimpleImage();
$image->load($transformer['illustration']);
$image->resizeToWidth(10);
$image->save('../mini/');
*/
// Marche absolumennt pas avec tout ce que on lui passe en paramètre


if ($reussiaddTF) {?>
<meta http-equiv="refresh" content="2; liste-films.php">
    Votre transformers à été add !
    Redirection vers l'acceuil dans 5 secondes.
    <?php
    }
    include "Bas.php";
    ?>
    


