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
  <div class="container-fluid adminTable">
     <form  action="insert_product.php" method="post" enctype="multipart/form-data">
       <table class="table table-striped table-bordered">
         <tbody>
           <td align="center"><strong>titre du produit:</strong></td>
           <td><input class="form-control" type="text" name="product_titre" value="" placeholder="titre de produit"></td>
         </tr>

         <tr>
           <td align="center"><strong>marque du produit:</strong></td>
           <td>
             <select class="form-control" name="product_marque">
               <option value="">choisir une marque</option>
               <?php
                insert_produit();
                ?>
             </select>
           </td>
         </tr>

         <tr>
           <td align="center"><strong>categorie du produit:</strong></td>
           <td>
             <select class="form-control" name="product_cat" width="70%">
               <option>choisir une categorie</option>;
               <?php
                  ajouterCategorie();
                ?>
             </select>
           </td>

         </tr>

         <tr>
           <td align="center"><strong>publier en tant que:</strong></td>
           <td><input class="form-control" type="text" name="product_published_by" value="" placeholder="ex: administrateur"></td>
         </tr>

         <tr>
           <td align="center"><strong>description du produit:</strong></td>
           <td><textarea name="product_descrip" rows="8" cols="80"></textarea></td>

         </tr>

         <tr>
           <td align="center"><strong>image du produit:</strong></td>
           <td><input class="form-control" type="file" name="product_image" value="" placeholder="ajouter une image"></td>
         </tr>

         <tr>
           <td align="center"><strong>prix du produit:</strong></td>
           <td><input class="form-control" type="number" name="product_prix" value="" placeholder="ajouter une prix"></td>
         </tr>
         <tr>
           <td align="center"><strong>quantité :</strong></td>
           <td><input class="form-control" type="number" name="product_quantite" value="" placeholder="ajouté une quantité"></td>

         </tr>

         <tr>
           <td align="center"><strong>mots clés du produit:</strong></td>
           <td><input class="form-control" type="text" name="product_motcles" value="" placeholder="mots clés"></td>
         </tr>
         </tbody>
       </table>
         <h2 align="center"><input class="btn btn-primary" type="submit" name="submited_insert" value="ajouter le produit"></h2>

     </form>
     <?php ajouterProduit(); ?>
  </div>;
</div>
  </body>
</html>
