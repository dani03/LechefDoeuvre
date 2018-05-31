<?php

require_once(__DIR__."/../modeles/profilModel.php");
if(isset($_SESSION['user_email']))
{
  echo "<p class='alert alert-success'> bienvenue ".$_SESSION['user_email']. " </p>";

}
$user = $_SESSION['user_email'];
function valideEditProfil($user)
{
   $edition = editProfil($user);
  return $edition;

}

// function modifierUtilisateur($nvNom,$nvEmail,$nvPassword,$nvPays,$nvVille,$nvContact,$nvPhoto,$nvAdresse,$user_id)
// {
//       if (isset($_POST['modifierProfil']))
//       {
//
//         $user_id = $_SESSION['user_id'];
//         $nvNom = htmlspecialchars($_POST['firstname']);
//         $nvEmail = htmlspecialchars($_POST['email']);
//         $nvPassword = sha1($_POST['pass']);
//         $nvPays = htmlspecialchars($_POST['pays']);
//         $nvVille = htmlspecialchars($_POST['ville']);
//         $nvContact = htmlspecialchars($_POST['contact']);
//         $nvPhoto = $_FILES['photo']['name'];
//         $nvAdresse = htmlspecialchars($_POST['adresse']);
//
//         $images_tmp = $_FILES['photo']['tmp_name'];
//
//         move_uploaded_file($images_tmp,"vues/images/$nvPhoto");
//
//              $results =  updateUser($nvNom,$nvEmail,$nvPassword,$nvPays,$nvVille,$nvContact,$nvPhoto,$nvAdresse,$user_id);
//              return $results;
//       }
//     }
// pour changer les passwords
 // if (isset($_POST['changePassword']))
 // {
 //     $PassWordActuel = htmlspecialchars(sha1($_POST['passModif']));
 //     $newPassword = htmlspecialchars(sha1($_POST['passModif2']));
 //     $confirmNewPassword = htmlspecialchars(sha1($_POST['passExact']));
 //
 // }

function editUser($userMail)
{
  if (isset($_POST['modifierProfil']))
  {
    $user_id = $_SESSION['user_id'];
  }
}

function modifierUtilisateur($utilisateur)
{
  if (isset($_POST['modifierProfil']))
  {
    if (isset($_POST['firstnameNew']) AND !empty($_POST['firstnameNew']))
    {
      $utilisateur = htmlspecialchars($_POST['firstnameNew']);
      $id = $_SESSION['user_id'];
       $editer = updateUser($utilisateur, $id);
       return $editer;

    }
  }
}

// supprimer un compte



  if(isset($_POST['deleteYes']))
  {
      deleteAcount();
  }

require_once(__DIR__.'/../vues/profilVue.php');
