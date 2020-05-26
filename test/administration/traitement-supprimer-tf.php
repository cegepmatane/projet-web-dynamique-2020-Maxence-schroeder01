<?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";
$id = $_POST["id"];
//echo $id;

$reussiDELTF = TransformerDAO::Supprimertf($id);
include "Haut.php"; 
?>
    <meta http-equiv="refresh" content="2; liste-films.php">
    Votre transformers à été supprimer !
    Redirection vers l'acceuil dans 5 secondes.
    <?php
include "Bas.php";
?>