 <?php
 include  "Base_de_donnes.php";
 $id = $_GET["id"];

 $MESSAGE_SQL_TF2 = "SELECT * from transformer where id=" . $id;
 echo  $MESSAGE_SQL_TF2;
 $requeteTF2 = $basededonnees->prepare($MESSAGE_SQL_TF2);
 $requeteTF2->execute();
 $TF = $requeteTF2->fetch();
 //print_r($_GET);
 //print_r($TF);
//echo $id;
 ?>



<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Les Transformers</title>
        <link rel="stylesheet" type="text/css" href="decoration/bidulle.css">
		<link rel="stylesheet" type="text/css" href="decoration/liste-films.css">
</head>
<body>
	<header>
	<br><br><br><br>
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

	  <div id="TF1">
                 <div class="film">
		
                 <img class="illustration" src="<?=$TF['illustration']?>"/>
		<h3 class="titre"><?=$TF['titre']?></h3>
		<p class="resume"><?=$TF['description']?></p>
		<span class="realisateur"><?=$TF['origine']?></span>



	</div>


</div>
</section>

	<footer><span id="signature"></span></footer>
</body>
</html>