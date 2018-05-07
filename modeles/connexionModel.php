<?php
require_once('database.php');


function verificationConnexion($emailConnect, $mdpConnect)
{
  $db = database();
  $recherche_user = $db->prepare('SELECT * FROM utilisateurs WHERE user_email= ? AND user_password= ?');
  $recherche_user->execute(array($emailConnect, $mdpConnect));
  return $recherche_user->fetch(PDO::FETCH_ASSOC);
}
