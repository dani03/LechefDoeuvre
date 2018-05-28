<?php
 require_once("modeles/inscriptionModel.php");

  if (isset($_POST['submitedInscription']))
  {
    $erreur = '<a href="connexion.php" class="alert alert-success">inscription reussi <span class="glyphicon glyphicon-ok-sign" style="color:green"></span></a> ';
    $user_name = htmlspecialchars($_POST['firstname']);
    $mail = htmlspecialchars($_POST['email']);
    $mot_de_passe = sha1($_POST['pass']);
    $mot_de_passe2 = sha1($_POST['pass2']);
    $ville = htmlspecialchars($_POST['ville']);
    $contact = htmlspecialchars($_POST['contact']);
    $pays = htmlspecialchars($_POST['pays']);
    $adresse = htmlspecialchars($_POST['adresse']);
    // recuperation de l'image
    $image = $_FILES['photo']['name'];
    $images_tmp = $_FILES['photo']['tmp_name'];

    move_uploaded_file($images_tmp,"vues/images/$image");
    $user_nameLongueur= strlen($_POST['firstname']);
    if(!empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['pass2'] && !empty($_POST['contact'])))
    {
      if(isPhone($contact))
      {
        if($user_nameLongueur > 12)
        {
          $erreur = "votre nom ou pseudo ne doit pas depasser 12 caractères";
        }
        else
        {
          if (filter_var($mail, FILTER_VALIDATE_EMAIL))
          {
            // on appelle la function qui verifie si l'email n'existe pas deja
              $mailExist = emailVerifier($mail);
            if($mailExist == 0)
            {
              if($mot_de_passe === $mot_de_passe2)
               {
                //  on appelle la function qui insere les données en base
                    $inscriptionReussie = inscriptionReussie($user_name, $mail, $mot_de_passe,$pays,$ville,$contact, $image, $adresse);
               }
               else
               {
                 $erreur = "les mots de passes sont differents";
               }
            }
          else
            {
              $erreur = "cet email existe deja";
            }
          }
          else
           {
            $erreur ="cet email est incorrect";
           }
        }
      }
      else
      {
          $erreur = "la syntaxe est 06 XX XX XX XX";
      }
    }
    else
    {
      $erreur ="tous les champs requis ne sont pas completés";
    }
    
    return $erreur;
  }
