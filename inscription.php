<?php
require "vues/link.php";
require "vues/headPage.php";
require("controllers/inscriptionController.php");
?>


<div class="container " align="center">
  <h1 align="center">inscription</h1>
  <div class="row">
    <div class="inscriptionBG">
      <form class="formulaire" action="inscription.php" method="post" id='contact-form' role='form' enctype="multipart/form-data">
        <div class="row" style="margin-left:-39px">
          <div class="">
            <label for="firstname"> pseudo/nom: <span class="blue">*</span></label>
            <input type="text" name="firstname" id="firstname" class="form-control" value='' placeholder="votre pseudo/nom" >
            <p class="comments"></p>
          </div>
          <div class="">
            <label for="email"> email :<span class="blue">*</span></label>
            <input type="email" name="email" id="email" class="form-control" value="" placeholder="visiteur@gmail.com" >
            <p class="comments"></p>
          </div>
          <div class="">
            <label for="pays">pays:</label>
            <input type="text" name="pays" id="pays" class="form-control" value="" placeholder=" ex:france" >
            <p class="comments"></p>
          </div>
          <div class="">
            <label for="ville">ville:<span class="blue">*</span></label>
            <input type="text" name="ville" id="ville" class="form-control" value="" placeholder="ex: paris" >
            <p class="comments"></p>
          </div>
          <div class="">
            <label for="contact">contact:<span class="blue">*</span></label>
            <input type="tel" name="contact" id="contact" class="form-control" value="" placeholder=" ex: 06 12 13 14 33" >
            <p class="comments"></p>
          </div>
          <div class="">
            <label for="image">photo de profil:</label>
            <input type="file" name="photo" id="photo" class="form-control" value="">
            <p class="comments"></p>
          </div>
          <div class="">
            <label for="adresse">adresse de livraison:<span class="blue">*</span></label>
            <input type="text" name="adresse" id="adresse" class="form-control" value="" placeholder="ajouté une adresse" >
            <p class="comments"></p>
          </div>
          <div class="col-md-6">
            <label for="pass">mot de passe :<span class="blue">*</span></label>
            <input  type="password" name="pass" id="pass" class="form-control" value="" placeholder="mot de passe" >
            <p class="comments"></p>
          </div>
          <div class="col-md-6">
            <label for="pass2"> retapper votre mot de passe :<span class="blue">*</span></label>
            <input type="password" name="pass2" id="pass2" class="form-control" value="" placeholder=" retaper mot de passe" >
            <p class="comments"></p>
          </div>

          <div class="col-md-6">
                <p class="blue"><strong>*ces champs sont requis</strong> </p>
          </div>
          <div class="col-md-6">
          <input type="submit" class="envoyer btn btn-primary" name="submitedInscription" value="insciption">
          </div>
          <p><?php if(isset($erreur)){
            echo "<h3 class='blue'>'.$erreur.'</h3>" ;
          }?>
          </p>
        </div>
        <p>il est acctuellement <?php echo date('H:i')?></p>
        <p class="merci"><a href="connexion.php">vous avez deja un compte ? connectez vous</a></p>
      </form>

    </div>

  </div>
</div>
