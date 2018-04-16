<?php
require_once(__DIR__.'/../modeles/model.php');
/**
 * [afficherProducts on afficher les produits dans cette function]
 * @return [type] [description]
 */
function afficherProducts()
{
  if(!isset($_GET['categorie']))
  {
    if (!isset($_GET['marque']))
    {
      $products = getProducts();
      return $products;
    }
  }
}
