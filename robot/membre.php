<?php
require_once "configuration.php";
require_once CHEMIN_ACCESSEUR . "MembreDAO.php";

$membreAutentifie =false;
$membre = [];



if(isset($_POST["action-autentification"]))
{
    $membre["pseudonyme"] = ($_POST["Pseudonyme"]);
    $membre["motDePasse"] = ($_POST["motDePasse"]);

    $membre = MembreDAO::autentifier($membre);
    $membreAutentifie = isset($membre["id"]);
}
if(!$membreAutentifie){
    $_SESSION["autentifie"] =true;
    $_SESSION["pseudonyme"] = $membre["pseudonyme"];
}

include "entente.php";

if(!$membreAutentifie){
include "autenthinfication.php";
 }  else{

    include "espacemembre.php";

}

include "pied.php";?>