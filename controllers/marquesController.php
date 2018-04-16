<?php
require_once(__DIR__.'/../modeles/model.php');


/**
 * [afficherMarques description]
 * @return string [description]
 */
function afficherMarques()
{
  $marques = getMarques();
  return $marques;
}
