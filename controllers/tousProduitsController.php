<?php
require(__DIR__.'/../modeles/model.php');


function displayTousProduits()
{
  $tousProduits = ToutProduits();
  return $tousProduits;
}
