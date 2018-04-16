

      <!-- header -->

      <div id="container_wrapper">


          <div id="sidebar">
            <div class="sidebar_title">categories</div>
            <ul id="cats">
              <?php
                  $categories = afficherCategories();
              foreach ($categories as $categorie)
                {
                  $categorie_id = $categorie['categorie_id'];
                  $categorie_titre = $categorie['categorie_titre'];?>
                  <li><a href='index.php?categorie=<?= $categorie_id ?>'><?= $categorie_titre ?></a></li>
         <?php } ;?>

            </ul>
            <!-- marques -->

            <div class="sidebar_title">marques</div>
            <ul id="cats">
            <?php  $marques = afficherMarques();
               foreach ($marques as $marque)
               {
                 $marque_id = $marque['marque_id'];
                 $marque_titre = $marque['marque_titre']; ?>
                 <li><a href='index.php?marque=<?= $marque_id ?>'><?= $marque_titre ?></a></li>
            <?php } ;?>
            </ul>
          </div>

          <div id="contenu_area">
            <?php
            // si aucune categories n'est selectionnée on appelle la fonction suivante:
                $Products = afficherProducts();
                if (is_array($Products) || is_object($Products))
                {
                  foreach($Products as $Product)
                  {
                    $product_id = $Product['product_id'];
                    $product_titre = $Product['product_titre'];
                    $product_prix = $Product['product_prix'];
                    $product_images = $Product['product_image'];


                    echo "
                    <div class='single_produit'>
                    <h3>".$product_titre."</h3>
                    <img src='espace_admin/product_images/".$product_images."'>
                    <section align='center'>
                    <p align='center'><strong> ".$product_prix." € </strong></p>

                    <a href='details.php?details=".$product_id."' style=float:left' class='details'><button class='btn btn-deflaut'>Details</button></a>
                    <a href='index.php?panier=" .$product_id."' style=float:right'><button id='add' class='btn btn-info ".$product_id."'>ajouter au panier</button></a>
                    </section>
                    </div>  ";

                  }
                }
              //  sinon si une categorie est selectionnée on appelle cette fonction:
                   $Categories = displayProductByCategories();
                   if (is_array($Categories) || is_object($Categories))
                   {

                     foreach ($Categories as $Categorie)
                     {

                       $product_id = $Categorie['product_id'];
                       $product_titre = $Categorie['product_titre'];
                       $product_prix =$Categorie['product_prix'];
                       $product_images = $Categorie['product_image'];

                       // ensuite ont les affichent
                       echo "
                       <div class='single_produit'>
                       <h3>".$product_titre."</h3>
                       <img src='espace_admin/product_images/".$product_images."'>
                       <section align='center'>
                       <p align='center'><strong>".$product_prix." € </strong></p>
                       <a href='details.php?details=".$product_id."' style=float:left' class='details'><button class='btn btn-deflaut'>Details</button></a>
                       <a href='index.php?panier=".$product_id."' style=float:right'><button id='add' class='btn btn-info' onClick='post();'>ajouter au panier</button></a>
                       </section>
                       </div> ";

                     }
                   }

            // pour selectionner une marque precise
                $getMarques = displayProductByMarques();
                if (is_array($getMarques) || is_object($getMarques))
                {
                  foreach ($getMarques as $getMarque)
                  {
                    // var_dump($getMarque);
                    // die();
                    $product_id  = $getMarque['product_id'];
                    $product_titre = $getMarque['product_titre'];
                    $product_prix = $getMarque['product_prix'];
                    $product_images =$getMarque['product_image'];

                    // ensuite ont les affichent
                    echo "
                    <div class='single_produit'>
                    <h3>".$product_titre."</h3>
                    <img src='espace_admin/product_images/".$product_images."'>
                    <section align='center'>
                    <p align='center'><strong>".$product_prix." € </strong></p>
                    <a href='details.php?details=".$product_id."' style=float:left' class='details'><button class='btn btn-deflaut'>Details</button></a>
                    <a href='index.php?panier=".$product_id."' style=float:right'><button id='add' class='btn btn-info' >ajouter au panier</button></a>
                    </section>
                    </div>  ";
                  }
                }


              ?>

          </div>
      </div>

      <footer> <h2 style="text-align:center;padding-top:30px">this is the footer  	&copy;</h2></footer>
    </main>

  </body>
</html>
