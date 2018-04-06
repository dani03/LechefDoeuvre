

      <!-- header -->

      <div id="container_wrapper">


          <div id="sidebar">
            <div class="sidebar_title">categories</div>
            <ul id="cats">
              <?php getCategories(); ?>
            </ul>
            <!-- marques -->

            <div class="sidebar_title">marques</div>
            <ul id="cats">
            <?php  getMarques();
             ?>
            </ul>
          </div>

          <div id="contenu_area">
            <?php panier();

            // si aucune categories n'est selectionnée on appelle la fonction suivante:

             getProducts();
            //  sinon si une categorie est selectionnée on appelle cette fonction:
            getCategorieProduct();
            // pour selectionner une marque precise
            getMarqueProduct();?>

          </div>
      </div>

      <footer> <h2 style="text-align:center;padding-top:30px">this is the footer  	&copy;</h2></footer>
    </main>

  </body>
</html>
