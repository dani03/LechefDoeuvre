<?php
require("../modeles/insert_produitModel.php");
require("../vues/link.php");

 ?>
  <body>
    <div class="container-fluid">
       <form  action="insert_product.php" method="post" enctype="multipart/form-data">
         <table class="table table-striped table-bordered">
           <thead align="center">
             <tr>
               <td><h2>inserez des produits</h2></td>
             </tr>
           </thead>
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
    </div>
  </body>
</html>
