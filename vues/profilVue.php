<?php
require_once(__DIR__.'/../modeles/profilModel.php');
require("link.php");
require_once("headPage.php");
?>



<div class="allPageProfil">

  <div class="photoDeProfil">
    <?php
    $SessionUser = $_SESSION['user_email'];
    $donnees = getImage($SessionUser);
    foreach ($donnees as $donnee)
    {
      $image = $donnee['user_photo'];
      echo "<img src='vues/images/".$image."' width='150px' height='150px'";
    }
    ?>
  </div>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
      <span class="caret"></span></button>
    <ul class="dropdown-menu">
       <li><a href="#">editer son profil</a></li>
       <li><a href="#">voir ses articles</a></li>
    </ul>
  </div>
  <a href="" id="addArticle" class="btn btn-info"> ajouter un article </a>

  <!-- <div class="formulaireUser" id="formulairePro">
   <h2> ajouter un produit sur la plateforme</h2>
     <form  action="profilVue.php" method="post" enctype="multipart/form-data">
          <input class="form-control" type="text" name="product_titreProfil" value="" placeholder="titre de produit"> <br>
          <select class="form-control" name="product_marqueProfil">
               <option value="">choisir une marque</option>

             </select><br>





             <select class="form-control" name="product_catProfil" width="70%"><br>
               <option>choisir une categorie</option> -->
               <!-- script php  -->
             <!-- </select><br>

             <input class="form-control" type="text" name="product_published_byProfil" value="" placeholder="ex: administrateur"><br>
             <textarea name="product_descripProfil" rows="2" cols="40"></textarea><br>
             <input class="form-control" type="file" name="product_imageProfil" value="" placeholder="ajouter une image" ><br>

             <input class="form-control" type="number" name="product_prixProfil" value="" placeholder="ajouter une prix"><br>

           <input class="form-control" type="number" name="product_quantiteProfil" value="" placeholder="ajouté une quantité"><br>

          <input class="form-control" type="text" name="product_motclesProfil" value="" placeholder="ajouter des mots clés"><br>


         <h2 align="center"><input class="btn btn-primary" type="submit" name="submited_insertProfil" value="ajouter le produit"></h2>

      </form>

      </div>
   </div> -->

  <!--parametre  -->
