<?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";

 $id = $_GET["id"];
 $TF = TransformerDAO::modiftf($id);

include "Haut.php"; 
 ?>

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

<?php
include "Bas.php"; 
?>