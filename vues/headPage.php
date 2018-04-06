<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>E commerce </title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
  <link rel="stylesheet" href="vues/styles/styles.css">
  </head>
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
          <li><a href="utilisateurs/profil.php">mon profil</a></li>
          <li><a href="#">s'inscrire</a></li>
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
