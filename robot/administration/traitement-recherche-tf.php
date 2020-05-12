<?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";
$search = $_POST["search"];
//echo $id;

$searchTF = TransformerDAO::rechercher($search);
 include "Haut.php"
?>
    <h2>Voici le resultat de votre recherche rapide</h2>
    <br>

	
		<div id="liste-film">
		<?php 
		// PARTIE VUE
		foreach($searchTF as $transformer)
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