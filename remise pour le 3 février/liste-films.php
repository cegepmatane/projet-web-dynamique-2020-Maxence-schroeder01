<?php
include  "Base_de_donnes.php";

$MESSAGE_SQL_LISTE_TF = "SELECT * FROM transformer";
//echo $MESSAGE_SQL_LISTE_TF;

$requeteListeTF = $basededonnees->prepare($MESSAGE_SQL_LISTE_TF);
$requeteListeTF->execute();
$listeTF = $requeteListeTF->fetchAll();
//print_r($listeTF);
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Les Transformers</title>
	<link rel="stylesheet" type="text/css" href="decoration/bidulle2.css">
	<link rel="stylesheet" type="text/css" href="decoration/liste-films.css">
	</head>
<body>
	<header>
		<br><br><br><br><br><br>
		<h1>Les Transformers</h1>
		<nav></nav>
	</header>
	
	<section id="contenu">
	<header id="header">
	<nav class="links" style="--items: 5;">
		<a href=liste-films.php>Acceuil</a>
		<a href="#">Je sais pas</a>
		<a href="#">Je sais pas</a>
		<a href="#">Je sais pas</a>
		<a href="#">Je sais pas</a>
		<span class="line"></span>
	</nav>
</header>
<br><br><br>
		<header><h2>Liste des Transformers</h2></header>
	
		<div id="liste-film">
		<?php 
		// PARTIE VUE
		foreach($listeTF as $transformer)
		{
		?>
		<a href="film.php?id=<?=$transformer['id']?>">
			<div class="film">
				<div class="illustration"></div>
				<h3 class="titre"><?=$transformer['titre']?></h3>
				<p class="resume"><?=$transformer['description']?></p>
				<span class="realisateur"><?=$transformer['origine']?></span>
			</div>
		</a>
		<?php	
		}
		?>
		</div>


	</section>
	
	<footer><span id="signature"></span></footer>
</body>
</html>
