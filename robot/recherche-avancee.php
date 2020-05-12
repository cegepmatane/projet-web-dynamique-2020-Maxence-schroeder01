<?php
include "Haut.php";
?>

  
                <form class="film" action="traitement-recherche-avancee-tf.php" method="POST" enctype="multipart/form-data">
       
                <div class="champs">
                    <label for="search">Recherche Avancée : Titre </label>

                        <input type="text" id="titre" name="titre"/>
                    
                </div>
                <div class="champs">
                    <label for="activite">Recherche Avancée : Activite</label>

                        <input type="text" id="activite" name="activite"/>
                    
                </div>
                <div class="champs">
                    <label for="description">Recherche Avancée : Description</label>
                    
                        <input type="text" id="description" name="description"/>
                    
                </div>
                <div class="champs">
                    <label for="taille">Recherche Avancée : Taille</label>

                        <input type="text" id="taille" name="taille"/>
                    
                </div>
                <div class="champs">
                    <label for="origine">Recherche Avancée : Origine</label>

                        <input type="text" id="origine" name="origine"/>
                    
                </div>
                <input class="sub" type="submit" value="Enregistrer">
</form>
</section>

<?php
include "Bas.php";
?>