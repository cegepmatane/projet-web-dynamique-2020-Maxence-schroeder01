<?php
include "Haut.php";
?>

  
                <form class="film" action="traitement-ajouter-tf.php" method="POST" enctype="multipart/form-data">
       
                <div class="illustration"></div>
                <div class="champs">
                    <label for="titre">titre</label>

                        <input type="text" id="titre" name="titre"/>
                    
                </div>
                <div class="champs">
                    <label for="activite">Activite</label>

                        <input type="text" id="activite" name="activite"/>
                    
                </div>
                <div class="champs">
                    <label for="description">description</label>

                        <textarea id="description" name="description"></textarea>
                    
                </div>
                <div class="champs">
                    <label for="taille">Taille</label>

                        <input type="text" id="taille" name="taille"/>
                    
                </div>
                <div class="champs">
                    <label for="origine">origine</label>

                        <input type="text" id="origine" name="origine"/>
                    
                </div>
                <div class="champs">
                    <label for="illustration">illustration</label>

                        <input type="file" id="illustration" name="illustration"/>

                </div>
                

                <input type="submit" value="Enregistrer">


</form>
</section>

<?php
include "Bas.php";
?>