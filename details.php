<?php

 require("modeles/model.php");
 require "vues/headPage.php";
?>



      <!-- header -->

      <div id="container_wrapper">

        <?php panier();?>
          <div id="sidebar">
            <div class="sidebar_title">categories</div>
            <ul id="cats">
              <?php getCategories(); ?>
            </ul>
            <!-- marques -->

            <div class="sidebar_title">marques</div>
            <ul id="cats">
            <?php  getMarques(); ?>
            </ul>
          </div>

          <div id="contenu_area">
              <?php getDetails(); ?>
          </div>
      </div>
      <footer> <h2 style="text-align:center;padding-top:30px">this is the footer  	&copy;</h2></footer>
    </main>
  </body>
</html>
