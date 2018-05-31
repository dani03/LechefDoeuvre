<?php
require "link.php"; ?>
  <body data-spy="scroll" data-target=".sidebar">

    <main class=" container-fluid main">

      <!-- header -->
      <header class=" header_wrapper">
        <h1 >`the great corner`</h1>
      </header>

      <nav class=" col-xs-6 col-sm-12 col-md-12  col-lg-12 menuBar navbar">
          <ul id="menu" class="collapse navbar-collapse nav-pills">
            <li class="col-md-2"><a href="index.php" class=" panel"><span class="glyphicon glyphicon-home" style="color:blue"></span> accueil</a></li>
            <li><a href="tous_produits.php" class="panel"><span class="glyphicon glyphicon-th" style="color:blue"></span> tous nos procuits</a></li>


            <li><a  class="panel " href="contact.php"><span class="glyphicon glyphicon-envelope" style="color:blue"></span> contactez nous</a></li>
            <?php if(!isset($_SESSION['user_email']) || isset($_POST['deleteYes']))
            {
              echo '<li><a  class="panel" href="connexion.php"> <span class="glyphicon glyphicon-user" style="color:blue"></span> se connecter</a></li>
              <li><a class="panel" href="inscription.php"> <span class="glyphicon glyphicon-pencil" style="color:blue"></span> s\'inscrire</a></li>';
            }
            else
            {
              echo '<li><a class="panel" href="deconnexion.php"> <span class="glyphicon glyphicon-log-out" style="color:blue"></span> deconnexion</a></li>
                    <li><a class="panel" href="profil.php"> <span class="glyphicon glyphicon-user" style="color:blue"></span> profil</a></li>
              ';
            }
             ?>


            <li><a class="panel" href="panier.php"> <span class="glyphicon glyphicon-shopping-cart" style="color:blue"></span> panier</a></li>


              <form id="sreach" action="resultatRecherche.php" method="get" enctype="multipart/form-data">
                <input type="text" name="mot_cles" value="" placeholder="rechercher un produit" required="entrer un mot">
                <input class="btn btn-primary" type="submit" name="find" value="rechercher">
              </form>

          </ul>


      </nav>
