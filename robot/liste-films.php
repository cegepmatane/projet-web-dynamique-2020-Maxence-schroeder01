<?php
require_once "configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";
$listeTF = TransformerDAO::lireall();
include "Haut.php"; 
?>
		<h1>Liste des Transformers</h1>
		<div id="liste-film">
		<?php 
		// PARTIE VUE
		foreach($listeTF as $transformer)
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