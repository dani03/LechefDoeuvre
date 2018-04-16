<?php
require_once(__DIR__.'/../modeles/model.php');

// on appelle la function getCategories()

/**
 * [afficherCategories  on appelle la function getCategories() pour afficher les categories dans la sidebar]
 * @return [type] [description]
 */
 function afficherCategories()
 {
     $categories = getCategories();
       //traitements eventuels (trie, filre ou vérification)
     return $categories;
  }
