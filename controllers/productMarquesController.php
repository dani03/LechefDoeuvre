<?php
require_once(__DIR__.'/../modeles/model.php');

  function displayProductByMarques()
  {
    if (isset($_GET['marque']))
    {
      $marque_id = $_GET['marque'];
      $byMarques = getMarqueProduct();
      return $byMarques;
    }
  }
