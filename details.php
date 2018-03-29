<?php

 require("functions/functions.php");

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E commerce </title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
  <link rel="stylesheet" href="styles/styles.css">
  </head>
  <body>

    <main class="main">

      <nav class="menuBar">
        <ul id="menu">
          <li><a href="index.php">acceuil</a></li>
          <li><a href="#">tous nos procuits</a></li>
          <li><a href="#">contactez nous</a></li>
          <li><a href="#">mon profil</a></li>
          <li><a href="#">s'inscrire</a></li>
          <li><a href="#">panier</a></li>
          <div class=recherche>
            <form id="sreach" action="" method="get" enctype="multipart/form-data">
              <input type="text" name="mot-cles" value="" placeholder="rechercher un produit">
              <input class="btn btn-primary" type="submit" name="key" value="rechercher">
            </form>
            <section id="shopping">
              <span>bienvenue!!!visualiser vos articles</span>
              <a href="panier.php"> panier <span>icon</span> </a>
              <b><p>prix total: € ; total articles:  €</p></b>
            </section>
          </div>
        </ul>


      </nav>

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
