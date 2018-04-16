<?php require "link.php"; ?>
  <body>

    <main class="main">

      <!-- header -->
      <header class="header_wrapper">
        this is the header ou sont les images
      </header>

      <nav class="menuBar">
        <ul id="menu">
          <li><a href="index.php">acceuil</a></li>
          <li><a href="tous_produits.php">tous nos procuits</a></li>
          <li><a href="#">contactez nous</a></li>
          <li><a href="connexion.php">se connecter</a></li>
          <li><a href="inscription.php">s'inscrire</a></li>
          <li><a href="panier.php">panier</a></li>
          <div class=recherche>
            <form id="sreach" action="resultatRecherche.php" method="get" enctype="multipart/form-data">
              <input type="text" name="mot_cles" value="" placeholder="rechercher un produit">
              <input class="btn btn-primary" type="submit" name="find" value="rechercher">
            </form>
            <section id="shopping">
              <span>bienvenue!!!visualiser vos articles</span>
              <a href="panier.php"> panier <span>icon</span> </a>
              <b><p>prix total: € ; total articles:  €</p></b>
            </section>
          </div>
        </ul>
      </nav>
