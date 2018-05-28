<?php
require_once(__DIR__."/../modeles/connexionModel.php");

function seConnecter()
{
  $message = '';
  if(isset($_POST['submitedConnect']))
  {
    $emailConnect = htmlspecialchars($_POST['emailConnect']);
    $mdpConnect = sha1($_POST['passConnect']);
    if(!empty($emailConnect) && !empty($mdpConnect))
    {
        $info_user = verificationConnexion($emailConnect,$mdpConnect);

        if($info_user != false)
        {
          $_SESSION['user_id'] = $info_user['user_id'];
          $_SESSION['user_email'] = $info_user['user_email'];
          $_SESSION['user_password'] = $info_user['user_password'];
          if ($info_user['user_email'] != $emailConnect || $info_user['user_password'] != $mdpConnect)
          {
            $message = "<a class='alert alert-danger'>mot de passe  ou email incorrect <span class='glyphicon glyphicon-remove-sign' style='color:red'> </a> ";

          }
          else
          {
            $_SESSION['user_id'] = $info_user['user_id'];
            header("location: profil.php?id=".$_SESSION['user_id']);
          }
        }
        else
        {
            $message = "<a class='alert alert-danger'>email n'existe pas <span class='glyphicon glyphicon-remove-sign' style='color:red'> </a> ";

        }

    }
    else
    {
      $message = "<a class='alert alert-danger'>tous les champs doivent être completés <span class='glyphicon glyphicon-remove-sign' style='color:red'> </a> ";
    }
  }
  return $message;
}
