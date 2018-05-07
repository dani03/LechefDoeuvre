<?php
require_once("database.php");



function decomptePanier($product)
{

    $db = database();

    $request = $db->query('SELECT * FROM produits WHERE product_id='.$product.'');

      return $request;

}

function displayArticleInPanier($prod_id)
{
  $bdd = database();
  $requestArticle = $bdd->prepare('SELECT * FROM produits WHERE product_id= :id');
  $requestArticle->execute(array(
    'id' => $prod_id
  ));
  return $requestArticle;
}
