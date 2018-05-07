<?php
session_start();
 require_once("controllers/tousProduitsController.php");
 require "vues/headPage.php";
?>
        <div id="contenu_area">
            <?php
            // si aucune categories n'est selectionnée on appelle la fonction suivante:
            $tousProduits = displayTousProduits();
            if (is_array($tousProduits) || is_object($tousProduits))
            {
              foreach ($tousProduits as $tousProduit)
              {
                $product_id = $tousProduit['product_id'];
                $product_titre = $tousProduit['product_titre'];
                $product_marque = $tousProduit['product_marque'];
                $product_cat = $tousProduit['product_cat'];
                $product_prix = $tousProduit['product_prix'];
                $product_images = $tousProduit['product_image'];


                echo "
                <div class='single_produit'>
                <h3>".$product_titre."</h3>
                <img src='espace_admin/product_images/".$product_images."'>
                <section align='center'>
                <p align='center'><strong> ".$product_prix." € </strong></p>
                <a href='details.php?details=".$product_id."' style=float:left' class='details'><button class='btn btn-deflaut'>Details</button></a>
                <a href='index.php?panier=".$product_id."' style=float:right'><button id='add' class='btn btn-info' onClick='post();'>ajouter au panier</button></a>
                </section>
                </div>  ";

              }
            }


            //  sinon si une categorie est selectionnée on appelle cette fonction:
            getCategorieProduct();
            // pour selectionner une marque precise
            getMarqueProduct();?>
        </div>


      <footer> <h2 style="text-align:center;padding-top:30px">this is the footer  	&copy;</h2></footer>
    </main>
  <script type="text/javascript" src="vues/styles/javascript/script.js"></script>
  </body>
</html>
