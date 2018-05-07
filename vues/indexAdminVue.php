<?php
require_once ("link.php");
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>the admin pannel</title>
    <link rel="stylesheet" href="../vues/styles/styles.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">THE GREAT CORNER ADMIN</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php?insert_product"><span class="glyphicon glyphicon-plus"></span> ajouter produit</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">administrateur<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li role="separator" class="divider"></li>
              <li><a href="#">se deconnecter</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- sidebar  -->
  <div class="wrapper">

    <nav id="sidebar">
        <!-- Sidebar Header -->
        <!-- Sidebar Links -->
        <ul class="list-unstyled components">
            <li class="active"><a href="#">dasboard admin</a></li>


            <li><!-- Link with dropdown items -->
                <a  style="text-align:center" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">produits</a>
                <ul class="collapse list-unstyled" id="homeSubmenu" style="text-align:center">
                    <li><a href="index.php?insert_product">ajouter nv produit</a></li>
                    <li><a href="index.php?nvCategorie">ajouter nv categorie</a></li>
                    <li><a href="index.php?toutesCategories">voir toutes les catégories</a></li>
                    <li><a href="index.php?nvMarque">ajouter nv marque</a></li>
                    <li><a href="index.php?toutesMarques">voir toutes les marques</a></li>
                    <li><a href="index.php?users">voir les utilisateurs</a></li>
                </ul>
            </li>
            <!-- <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li> -->
        </ul>
    </nav>
</div>

<div class="mainAdmin">
  
</div>
  </body>
</html>
