<?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";
$listeTF = TransformerDAO::lireall();
include "Haut.php"; 

?>
	<h1>Liste des Transformers</h1>
	
		<input class=button type=button onclick=window.location.href='ajouter-tf.php';  value="Ajouter un transformers" />
		<input class=button type=button onclick=window.location.href='rss.php';  value="Notre Flux RSS" />
		<input class=button type=button onclick=window.location.href="sitemap.xml";  value="Notre SiteMap" />
		<div id="liste-film">
		<?php 
		// PARTIE VUE
		foreach($listeTF as $transformer)
		{
		?>
		<a href="film.php?id=<?=$transformer['id']?>">
			<div class="film">
			<img class="illustration" src="../illustration/<?=$transformer['illustration']?>" alt=""/>
				<h3 class="titre"><?=$transformer['titre']?></h3>
				<p class="resume"><?=$transformer['description']?></p>
				<span class="realisateur"><?=$transformer['origine']?></span>
				<a class=but1 href="modifier_TF.php?id=<?=$transformer['id']?>">modifier</a>
				<a class=but2 href="supprimer_TF.php?id=<?=$transformer['id']?>">Supprimer</a>
			</div>
		</a>
		<?php	
		}
		?>
		</div>
	<?php
include "Bas.php";
?>