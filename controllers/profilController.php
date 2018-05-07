<?php
require_once(__DIR__."/../modeles/profilModel.php");
if(isset($_SESSION['user_email']))
{
  echo "<p class='alert alert-success'> bienvenue ".$_SESSION['user_email']. " </p>";

}





require_once(__DIR__.'/../vues/profilVue.php');
