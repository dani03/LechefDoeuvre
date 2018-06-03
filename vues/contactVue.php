<?php
require_once("link.php");
?>
<body>
    <div class="container ">
      <div class="separateur"></div>
      <div class="heading">
        <h2 id="contactME">contactez nous</h2>
      </div>
      <a href="index.php" class="btn btn-default"><span class="glyphicon glyphicon-home" style="color:blue"></span> accueil</a>
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <form class="formulaire" action="" method="post" id='contact-form' role='form'>
            <div class="row">
              <div class="col-md-6">
                <label for="firstname"> prénom <span class="blue">*</span></label>
                <input type="text" name="firstname" id="firstname" class="form-control" value='' placeholder="votre prénom">
                <p class="comments"></p>
              </div>
              <div class="col-md-6">
                <label for="name"> nom <span class="blue">*</span></label>
                <input type="text" name="name" id="name" class="form-control" value='' placeholder="votre nom"  >
                <p class="comments"></p>
              </div>
              <div class="col-md-6">
                <label for="firstname"> email<span class="blue">*</span></label>
                <input type="email" name="email" id="email" class="form-control" value="" placeholder="visiteur@gmail.com" >
                <p class="comments"></p>
              </div>
              <div class="col-md-6">
                <label for="phone"> téléphone <span class="blue">*</span></label>
                <input type="tel" name="phone" id="phone" class="form-control" value="" placeholder=" ex:12 34 56 78 90" >
                <p class="comments"></p>
              </div>
              <div class="col-md-12">
                  <label for="message"> message <span class="blue">*</span></label>
                  <textarea name="message" id="message"  class="form-control" placeholder="entrez votre message"rows="8" cols="80"> </textarea>
                  <p class="comments"></p>
              </div>
              <div class="col-md-12">
                    <p class="blue"><strong>*ces champs sont requis</strong> </p>
              </div>
              <div class="col-md-12">
              <input type="submit" class="envoyer" name="contactValidation" value="envoyer">
              </div>

            </div>
            <p class=" alert alert-success merci" style="display:none"> votre message a bien été envoyé merci de nous avoir contacter.</p>
          </form>

        </div>

      </div>
    </div>

  </body>
</html>
