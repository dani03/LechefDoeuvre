<?php
require("database.php");
// on cree la function qui verifie si le telephone est valide
function isPhone($var)
{
  return preg_match("/^[0-9 ]*$/", $var);
}

 /**
  * [emailVerifier : on cree la function qui verifie si l'email n'est pas deja en base de donnée]
  * @param  [type] $mail [description]
  * @return [type]       [description]
  */
 function emailVerifier(string $mail)
 {
   $bdd = database();
   $mail_different = $bdd->prepare('SELECT * FROM utilisateurs WHERE user_email = :email');
   $mail_different->execute(array(
      'email' => $mail
   ));
   $mailExist = $mail_different->rowCount();
   return $mailExist;
 }

// on crée ensuite la function qui verifie permet d'ajouter les elements a la base de donnée
 function inscriptionReussie($user_name, $mail, $mot_de_passe,$pays,$ville,$contact, $image, $adresse)
 {
    $bdd = database();
   $request = $bdd->prepare('INSERT INTO utilisateurs(user_name, user_email, user_password, user_pays, user_ville, user_contact, user_photo, user_adresse) VALUES(:user_name, :user_email, :user_password, :user_pays, :user_ville, :user_contact, :user_photo, :user_adresse)');
   if(
     $request->execute(
       array(
         'user_name' => $user_name,
         'user_email' => $mail,
         'user_password' => $mot_de_passe,
         'user_pays' => $pays,
         'user_ville' => $ville,
         'user_contact' => $contact,
         'user_photo' => $image,
         'user_adresse' => $adresse
       )
     )
   ) {
     $message = "votre compte a été crée <a href=connexion.php> connectez -vous</a>";
   }
   else {
     $message = "votre compte n'a pas été crée";
   }
    echo $message;
 }
