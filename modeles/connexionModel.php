<?php
require_once('database.php');

/**
 * [verificationConnexion cette function permet de vérifier la connexion et les informations que l'utilisateur entre]
 * @param  [string] $emailConnect [email de l'utilisateur]
 * @param  [string] $mdpConnect   [mot de passe de l'utlisateur]
 * @return [array]               [description]
 */
function verificationConnexion($emailConnect, $mdpConnect)
{
  $db = database();
  $recherche_user = $db->prepare('SELECT * FROM utilisateurs WHERE user_email= ? AND user_password= ?');
  $recherche_user->execute(array($emailConnect, $mdpConnect));
  return $recherche_user->fetch(PDO::FETCH_ASSOC);
}
