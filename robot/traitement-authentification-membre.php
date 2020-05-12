<?php 
require_once "configuration.php";
require_once CHEMIN_ACCESSEUR . "BaseDeDonnees.php";
include "Haut.php";
$pseudonymeFormulaire = $_POST['pseudonyme'];
$motdepasseFormulaire = $_POST['motdepasse'];

$SQL_AUTHENTIFICATION = "SELECT * FROM membre WHERE pseudonyme = '$pseudonymeFormulaire'";
//echo $SQL_AUTHENTIFICATION;

$requeteAuthentification = BaseDeDonnees::getConnexion()->prepare($SQL_AUTHENTIFICATION);
$requeteAuthentification->execute();
$membre = $requeteAuthentification->fetch();
//print_r($membre);

// Verifier si le mot de passe du formulaire ($motdepasse) est le meme que celui dans la base de donnees ($membre['motdepasse'])
if($motdepasseFormulaire == $membre['motdepasse'])
{
	echo "C'est le bon mot de passe";
	$_SESSION['membre']['pseudonyme'] = $membre['pseudonyme'];
	$_SESSION['membre']['courriel'] = $membre['courriel'];
	$_SESSION['membre']['nom'] = $membre['nom'];
	//print_r($_SESSION);
	?>
	<meta http-equiv="refresh" content="1; administration/liste-films.php">
    Vous etes connecté !
    Redirection vers la page administrateur dans 5 secondes.
	<?php
}
else
{
	echo "Ce n'est pas le bon mot de passe";	
	?>
	<meta http-equiv="refresh" content="2; liste-films.php">
    Redirection vers l'acceuil dans 5 secondes.
	<?php
}

?>