<?php
require_once "../configuration.php";
require_once CHEMIN_ACCESSEUR . "TransformerDAO.php";

 $id = $_GET["id"];
 $TF = TransformerDAO::modiftf($id);

 include "Haut.php"; 
 ?>

  
                <form class="film" action="traitement-modifier-tf.php" method="POST" enctype="multipart/form-data">
                <div class="illustration"></div>
                <div class="champs">
                    <label for="titre">titre</label>

                    <input type="text" id="titre" name="titre" value="<?=$TF['titre']?>"/>	
                </div>
                <div class="champs">
                    <label for="activite">Activite</label>

                        <input type="text" id="activite" name="activite" value="<?=$TF['Activite'];?>"/>
                    
                </div>
                <div class="champs">
                    <label for="description">description</label>

                        <textarea id="description" name="description"><?=$TF['description'];?></textarea>
                    
                </div>
                <div class="champs">
                    <label for="taille">Taille</label>

                        <input type="text" id="taille" name="taille" value="<?=$TF['taille'];?>"/>
                    
                </div>
                <div class="champs">
                    <label for="origine">origine</label>

                        <input type="text" id="origine" name="origine" value="<?=$TF["origine"];?>"/>
                    
                </div>
                <div class="champs">
                    <label for="illustration">illustration</label>

                        <input type="file" id="illustration" name="illustration"/>

                </div>
                
                              <input type="hidden" id="id" name="id" value="<?=$TF["id"];?>"/>


                <input type="submit" value="Enregistrer">


</form>
</section>

<?php
include "Bas.php";
?>