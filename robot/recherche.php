<?php
include "Haut.php";
?>

  
                <form class="film" action="traitement-recherche-tf.php" method="POST" enctype="multipart/form-data">
       
                <div class="champs">
                    <label for="search">Recherche Rapide :</label>

                        <input type="text" id="search" name="search"/>
                    
                </div>
                <input class="sub" type="submit" value="Enregistrer">
</form>
</section>

<?php
include "Bas.php";
?>