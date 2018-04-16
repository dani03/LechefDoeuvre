<?php
require_once(__DIR__.'/../modeles/model.php');


/**
 * [displayProductByCategories cette function nous permet de recuperer les produits d'une meme catégorie ]
 * @return [type] [description]
 */
function displayProductByCategories()
{
  if (isset($_GET['categorie']))
  {
    $categorie_id = $_GET['categorie'];
    $categoriesProducts = getCategorieProduct();
    return $categoriesProducts;
  }
}
