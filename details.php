<?php
session_start();
require_once("controllers/marquesController.php");
 require "vues/headPage.php";
 require_once("controllers/categoriesController.php");
?>



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
                  <li><a href='index.php?categorie="<?= $categorie_id ?>"'><?= $categorie_titre ?></a></li>
         <?php } ;?>
            </ul>
            <!-- marques -->

            <div class="sidebar_title">marques</div>
            <ul id="cats">
            <?php
              $marques = afficherMarques();
               foreach ($marques as $marque)
               {
                 $marque_id = $marque['marque_id'];
                 $marque_titre = $marque['marque_titre']; ?>
                 <li><a href='index.php?marque=<?= $marque_id ?>'><?= $marque_titre ?></a></li>
            <?php } ; ?>
            </ul>
          </div>

          <div id="contenu_area">
              <?php getDetails(); ?>
          </div>
      </div>
      <footer> <h2 style="text-align:center;padding-top:30px">this is the footer  	&copy;</h2></footer>
    </main>
    <script type="text/javascript" src="vues/styles/javascript/script.js"></script>
  </body>
</html>
