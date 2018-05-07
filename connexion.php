<?php
session_start();
require_once("controllers/connexionController.php");
$message = seConnecter();
require "vues/link.php";
require "vues/headPage.php";
?>

<div class="container form_connexion" align="center">
  <div class="diviseur"></div>

  <h1 align="center">connectez vous!</h1>
  <div class="row" style="width:51%">
    <div class="">
      <form class="formulaire" action="" method="post" id='contact-form' role='form'>
        <div class="row">
          <div class="col-md-6">
            <label for="firstname"> pseudo/nom: <span class="blue">*</span></label>
            <input type="text" name="firstnameConnect" id="firstname" class="form-control" value='' placeholder="votre pseudo/nom" >
            <p class="comments"></p>
          </div>
          <div class="col-md-6">
            <label for="email"> email :<span class="blue">*</span></label>
            <input type="email" name="emailConnect" id="email" class="form-control" value="" placeholder="visiteur@gmail.com" >
            <p class="comments"></p>
          </div>
          <div class="col-md-6">
            <label for="pass">mot de passe :<span class="blue">*</span></label>
            <input type="password" name="passConnect" id="pass" class="form-control" value="" placeholder="mot de passe" >
            <p class="comments"></p>
          </div>
          <p class="merci"><a href="inscription.php">vous n'avez pas de compte ? inscrivez-vous </a></p>
          <p><a href="#"> mot de passe oublié?</a></p>
          </div>
          <div class="">
            <p class="blue"><strong>*ces champs sont requis</strong> </p>
          <input type="submit" class="envoyer btn btn-info" name="submitedConnect" value="connexion">
          </div>

          <p class="">
            <?php echo $message;?>
          </p>
          <p>il est acctuellement <?php echo date('H:i')?></p>
        </div>
      </form>

    </div>

  </div>
</div>
