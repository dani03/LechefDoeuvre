<?php
require_once(__DIR__.'/../modeles/profilModel.php');
require("link.php");
require_once("headPage.php");
?>


<body data-spy="scroll" data-target=".navbar2" data-offset="50">
  <div class=" container-fluid allPageProfil">
      <div class="row">
        <section class=" sectionNavbar2">
          <nav class="navigation">
            <ul class="nav nav-pills">
              <li role="presentation" ><a class="scroll active" href="#enVente">mettre en vente</a></li>
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
              <h2>METTRE EN VENTE</h2>
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
                <h2>MES PRODUITS EN LIGNE</h2>
            </div>

            <div id="supprimer" class="Inprofil">
                <h2>SUPPRIMER MON COMPTE</h2>
                <div class="compteDelete alert alert-warning">
                  <form class="" action="" method="post">
                    <input type="submit" class="alert alert-danger btn " name="deleteYes" value="oui">
                    <input type="submit" class="alert alert-success btn" name="deleteNO" value="non">
                  </form>
                  <?php if (isset($_POST['deleteYes'])) {
                          deleteAcount();
                      } ?>
                </div>
            </div>
            <div id="editer" class="Inprofil" color="red">
              <h2>EDITER VOTRE COMPTE</h2>
               <?php
                $user = $_SESSION['user_id'];
                $editComptes = ID_USER($user);
                if (is_array($editComptes) || is_object($editComptes))
                {
                 foreach ($editComptes as $editCompte)
                 {

                    $id = $editCompte['user_id'];
                    $nvNom = $editCompte['user_name'];
                    $nvEmail = $editCompte['user_email'];
                    $nvPassword = $editCompte['user_password'];
                    $nvPays = $editCompte['user_pays'];
                    $nvVille = $editCompte['user_ville'];
                    $nvContact = $editCompte['user_contact'];
                    $nvPhoto = $editCompte['user_photo'];
                    $nvAdresse = $editCompte['user_adresse'];

                    modifierUtilisateur($nvEmail);
                 }
                }
               ?>
              <div class="row">
                <div class="inscriptionBG">
                  <form class="formulaire" action="profil.php?id=<?= $id ;?>" method="post" id='contact-formInscrip' role='form' enctype="multipart/form-data">
                    <div class="row" style="margin-left:-39px">
                      <div class="col-md-6">
                        <label for="firstname"> pseudo/nom: <span class="blue">*</span></label>
                        <input type="text" name="firstnameNew" id="firstname" class="form-control" value='<?= $nvNom ; ?>' placeholder="votre pseudo/nom" >
                        <p class="comments"></p>
                      </div>
                      <div class="col-md-6">
                        <label for="email"> email :<span class="blue">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $nvEmail ; ?>" placeholder="visiteur@gmail.com" >
                        <p class="comments"></p>
                      </div>
                      <div class="col-md-6">
                        <label for="pays">pays:</label>
                        <input type="text" name="pays" id="pays" class="form-control" value="<?= $nvPays ; ?>" placeholder=" ex:france" >
                        <p class="comments"></p>
                      </div>
                      <div class="col-md-6">
                        <label for="ville">ville:<span class="blue">*</span></label>
                        <input type="text" name="ville" id="ville" class="form-control" value="<?= $nvVille ; ?>" placeholder="ex: paris" >
                        <p class="comments"></p>
                      </div>
                      <div class="col-md-6">
                        <label for="contact">contact:<span class="blue">*</span></label>
                        <input type="tel" name="contact" id="contact" class="form-control" value="<?= $nvContact ; ?>" placeholder=" ex: 06 12 13 14 33" >
                        <p class="comments"></p>
                      </div>
                      <div class="col-md-6">
                        <label for="image">photo de profil:</label>
                        <input type="file" name="photo" id="photo" class="form-control" value="<?= $nvPhoto ;?>">
                        <p class="comments"></p>
                      </div>
                      <div class="col-md-6">
                        <label for="adresse">adresse de livraison:<span class="blue">*</span></label>
                        <input type="text" name="adresse" id="adresse" class="form-control" value="<?= $nvAdresse; ?>" placeholder="ajouté une adresse" >
                        <p class="comments"></p>
                      </div>
                      <div class="col-md-6">
                        <label for="pass">mot de passe :<span class="blue">*</span></label>
                        <input  type="password" name="pass" id="pass" class="form-control" value="" placeholder="mot de passe" >
                        <p class="comments"></p>
                      </div>
                      <div class="col-md-12">
                          <input type="submit" class="envoyer btn btn-primary" name="modifierProfil" value="modifier">
                      </div>
                      <p><?php if(isset($erreur)){
                        echo "<h3 class='blue'>'.$erreur.'</h3>" ;
                      }




                      ?>
                      </p>
                    </div>
                    <p>il est acctuellement <?php echo date('H:i')?></p>

                  </form>
                </div>
                <div class="changePass" id= "change">
                  <form class="" action="" method="post">
                    <h3>changez de mot de passe </h3>
                    <div class="col-md-6">
                      <label for="pass">mot de passe actuel:<span class="blue">*</span></label>
                      <input  type="password" name="passModif"  class="form-control" value="" placeholder="mot de passe" >
                      <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                      <label for="pass">nouveau mot de passe:<span class="blue">*</span></label>
                      <input  type="password" name="passModif2"  class="form-control" value="" placeholder="mot de passe" >
                      <p class="comments"></p>
                    </div>
                    <div class="col-md-6">
                      <label for="pass">ressaisir nouveau mot de passe:<span class="blue">*</span></label>
                      <input  type="password" name="passExact"  class="form-control" value="" placeholder="mot de passe" >
                      <p class="comments"></p>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="envoyer btn btn-primary" name="changePassword" value="valider">
                    </div>
                  </form>
                </div>

              </div>
        </div>
      </div>
  </div>
  </div>

</body>
