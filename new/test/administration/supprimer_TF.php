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

                <H3>Vous voulez supprimer tout ces parametre ??</H3>
  
                <form class="film" action="traitement-supprimer-tf.php" method="POST" enctype="multipart/form-data">
       
                <div class="illustration"></div>
                <div class="champs">
                    <label for="titre">titre</label>

                        <input type="hidden" id="titre" name="titre" value="<?=$TF["titre"];?>"/>
                    
                </div>
                <div class="champs">
                    <label for="activite">Activite</label>

                        <input type="hidden" id="activite" name="activite" value="<?=$TF["Activite"];?>"/>
                    
                </div>
                <div class="champs">
                    <label for="description">description</label>

                        <input type="hidden" id="description" name="description" value="<?=$TF["description"];?>"/>
                    
                </div>
                <div class="champs">
                    <label for="taille">Taille</label>

                        <input type="hidden" id="taille" name="taille" value="<?=$TF["taille"];?>"/>
                    
                </div>
                <div class="champs">
                    <label for="origine">origine</label>

                        <input type="hidden" id="origine" name="origine" value="<?=$TF["origine"];?>"/>
                    
                </div>
                <div class="champs">
                    <label for="illustration">illustration</label>

                        <input type="hidden" id="illustration" name="illustration"/>

                </div>
                
                <input type="hidden" id="id" name="id" value="<?=$TF["id"];?>"/>
                

                <input type="submit" value="Enregistrer">

                <a href="liste-films.php" target="_blank"> <input type="button" value="Annuler"> </a>


</form>
</section>

   <footer><span id="signature"></span></footer>
</body>
</html>