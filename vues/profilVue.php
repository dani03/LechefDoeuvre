<?php
// require_once(__DIR__.'/../modeles/profilModel.php');
require("link.php");
require_once("headPage.php");
?>


<body data-spy="scroll" data-target=".navbar2" data-offset="50">
  <div class=" container-fluid allPageProfil">
      <div class="row">
        <section class=" sectionNavbar2">
          <nav class="navbar2" >
            <ul class="nav nav-pills">
              <li role="presentation" class="active"><a class="scroll" href="#enVente">mettre en vente</a></li>
              <li role="presentation"><a href="#enLigne" class="scroll"> mes produits en ligne</a></li>
              <li role="presentation"><a href="#supprimer" class="scroll"> supprimer mon compte</a></li>
              <li role="presentation"><a href="#editer" class="scroll"> editer</a></li>
            </ul>
          </nav>
        </section>
        <section>
          <div class="col-md-6 photoDeProfil">
            <?php
            $SessionUser = $_SESSION['user_email'];
            $donnees = getImage($SessionUser);
            foreach ($donnees as $donnee)
            {
              $image = $donnee['user_photo'];
              echo "<img class='img-circle' src='vues/images/".$image."' width='150px' height='150px'";
            }
            ?>
          </div>
        </section>
      <div class="parametres">
            <div id="enVente" class="Inprofil">
                <div class="row">
                  <form  action="profil.php" method="post" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered">
                      <tbody>
                      <tr>
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
                        <td><input class="form-control" type="email" name="product_published_by" value="<?= $SessionUser ?>" placeholder="ex: administrateur" ></td>
                      </tr>

                      <tr>
                        <td align="center"><strong>description du produit:</strong></td>
                        <td><textarea name="product_descrip" rows="8" cols="80" required=""></textarea></td>

                      </tr>

                      <tr>
                        <td align="center"><strong>image du produit:</strong></td>
                        <td><input class="form-control" type="file" name="product_image" value="" placeholder="ajouter une image" required=""></td>
                      </tr>

                      <tr>
                        <td align="center"><strong>prix du produit:</strong></td>
                        <td><input class="form-control" type="number" name="product_prix" value="" placeholder="ajouter une prix" required=""></td>
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
            </div>
            <div id="enLigne" class="Inprofil" >
                <!--  mettre la fonction qui recuperer les acrticles d'un particulier sur le site-->
            </div>

            <div id="supprimer" class="Inprofil">

            </div>
            <div id="editer" class="Inprofil" color="red">

        </div>
      </div>
  </div>
  </div>
</body>
