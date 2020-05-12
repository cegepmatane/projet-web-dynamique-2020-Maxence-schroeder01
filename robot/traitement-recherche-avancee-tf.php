<?php
require_once "configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";

$titre = $_POST["titre"];
$activite = $_POST["activite"];
$taille = $_POST["taille"];
$description = $_POST["description"];
$origine = $_POST["origine"];

$searchTFAV = TransformerDAO::rechercherAV($titre,$activite,$description,$taille,$origine);
include "Haut.php"

?>
    <h2>Voici le resultat de votre recherche rapide</h2>
    <br>

	
		<div id="liste-film">
		<?php 
		// PARTIE VUE
		foreach($searchTFAV as $transformer)
		{
		?>
		<a href="film.php?id=<?=$transformer['id']?>">
			<div class="film">
			<img class="illustration" src="illustration/<?=$transformer['illustration']?>" alt=""/>
				<h3 class="titre"><?=$transformer['titre']?></h3>
				<p class="resume"><?=$transformer['description']?></p>
				<span class="realisateur"><?=$transformer['origine']?></span>
			</div>
		</a>
		<?php	
		}
		?>
		</div>

    <?php
include "Bas.php";
?>