 <?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";

$id = $_GET["id"];
 $TF = TransformerDAO::lireTransformer($id);

 //print_r ($TF);
 include "Haut.php"; 
 ?>

<link rel="stylesheet" type="text/css" href="../decoration/cinematruc.css">

 <h2>Votre Transformers en détaille</h2>
	  <div id="TF1">
                 <div class="film">
				 <img class="illustration" src="../illustration/<?=$TF['illustration']?>"/>
			<h3 class="titre"><?=$TF['titre']?></h3>
			<p class="resume"><?=$TF['description']?></p>
			<span class="realisateur"><?=$TF['origine']?></span>
			</div>
			</div>

<?php
include "Bas.php";
?>