<?php
 require("modeles/model.php");
 require "vues/headPage.php";
?>
        <div id="contenu_area">
            <?php
            panier();
            // si aucune categories n'est selectionnée on appelle la fonction suivante:
             ToutProduits();
            //  sinon si une categorie est selectionnée on appelle cette fonction:
            getCategorieProduct();
            // pour selectionner une marque precise
            getMarqueProduct();?>
        </div>


      <footer> <h2 style="text-align:center;padding-top:30px">this is the footer  	&copy;</h2></footer>
    </main>

  </body>
</html>
