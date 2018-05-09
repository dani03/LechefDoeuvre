<?php
require "link.php"; ?>
  <body>

    <main class="main">

      <!-- header -->
      <header class="header_wrapper">
        <h1>`the great corner`</h1>
      </header>

      <nav class="menuBar">
        <ul id="menu">
          <li><a href="index.php" class=" panel">acceuil</a></li>
          <li><a href="tous_produits.php" class="panel">tous nos procuits</a></li>


          <li><a href="#">contactez nous</a></li>
          <?php if(!isset($_SESSION['user_email']))
          {
            echo '<li><a href="connexion.php">se connecter</a></li>
            <li><a href="inscription.php">s\'inscrire</a></li>';
          }
          else
          {
            echo '<li><a href="deconnexion.php">deconnexion</a></li>
                  <li><a href="profil.php">profil</a></li>
            ';
          }
           ?>


          <li><a href="panier.php">panier</a></li>

          <div class=recherche>
            <form id="sreach" action="resultatRecherche.php" method="get" enctype="multipart/form-data">
              <input type="text" name="mot_cles" value="" placeholder="rechercher un produit" required="entrer un mot">
              <input class="btn btn-primary" type="submit" name="find" value="rechercher">
            </form>
            <section id="shopping">
              <span>bienvenue!!!visualiser vos articles</span>
              <a href="panier.php"> panier <span>icon</span> </a>
              <b><p>prix total:€ ; total articles:  €</p></b>
            </section>
          </div>
        </ul>
      </nav>
