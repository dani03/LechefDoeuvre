<?php


include("includes_admin/database.php");

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>administration</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
  </head>
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
                 $db = database();
                 $statement = $db->prepare('SELECT * FROM marques');
                 $statement->execute(array());
                if ($marque = $statement > 0) {

                  while ($marque = $statement->fetch())
                  {
                    $marque_id = $marque['marque_id'];
                    $marque_titre = $marque['marque_titre'];
                    echo "<option value='".$marque_id."'>".$marque_titre."</option>";
                  }
                }

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
                     $db = database();
                     $request = $db->prepare('SELECT * FROM categories');
                     $request->execute(array());
                    if ($categorie = $request > 0){

                      while ($categorie = $request->fetch())
                      {
                        $categorie_id = $categorie['categorie_id'];
                        $categorie_titre = $categorie['categorie_titre'];
                        echo "<option value='".$categorie_id."'>".$categorie_titre."</option>";
                      }
                    }
                  ?>
               </select>
             </td>

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
             <td align="center"><strong>mots clés du produit:</strong></td>
             <td><input class="form-control" type="text" name="product_motcles" value="" placeholder="mots clés"></td>
           </tr>
           </tbody>
         </table>
           <h2 align="center"><input class="btn btn-primary" type="submit" name="submited_insert" value="ajouter le produit"></h2>

              <?php  ?>
       </form>
    </div>
  </body>
</html>

<?php
if (isset($_POST['submited_insert']))
{
  $bdd = database();
   $product_titre = $_POST['product_titre'];
   $product_marque = $_POST['product_marque'];
   $product_categorie = $_POST['product_cat'];
   $product_prix = $_POST['product_prix'];
   $product_motcles = $_POST['product_motcles'];
   $product_descrip = $_POST['product_descrip'];


  //  on recupere l'images
   $product_images_name = $_FILES['product_image']['name'];
   $product_image_tmp = $_FILES['product_image']['tmp_name'];

  //  on upload l'image dans le dossier cree(product_images)
   move_uploaded_file($product_image_tmp,"product_images/$product_images_name");
  //  on insert dans la base de données
       $insertion_bdd = $bdd->prepare('INSERT INTO produits(product_titre,product_cat,product_prix,product_marque,product_descrip,product_image,product_motcles) VALUES(:product_titre, :product_cat, :product_prix, :product_marque, :product_descrip, :product_image, :product_motcles)');
       $insertion_bdd->execute(array(
         'product_titre' => $product_titre,
         'product_cat' => $product_categorie,
         'product_prix' => $product_prix,
         'product_marque' => $product_marque,
         'product_descrip' => $product_descrip,
         'product_image' => $product_images_name,
         'product_motcles' => $product_motcles
   ));
   echo "<script>alert('le produit a bien été ajouté!')</script>";
}


 ?>
