<?php
// connexion a la base de données
require "database.php";
// on recupere les categories

/**
 * [getCategories description]
 * @return string [description]
 */
function getCategories()
{
  $bdd = database();
  $statement = $bdd->prepare('SELECT * FROM categories');
  $statement->execute(array());
  $categories = $statement->fetchAll();
   return $categories;
}



function getMarques()
{
  $bdd = database();
  $req = $bdd->prepare('SELECT * FROM marques');
  $req->execute(array());
  $marques = $req->fetchAll();
  return $marques;
}

// on recupere les produits pour les afficher

function getProducts()
  {
        $db = database();
        $request = $db->prepare('SELECT * FROM produits ORDER BY RAND() LIMIT 0,6');
        $request->execute(array());
        $products = $request->fetchAll();
         return $products;

 }

// on recupere les details



function getDetails()
  {
    if (isset($_GET['details']))
    {
      $product_id= $_GET['details'];
        $db = database();

        $request = $db->prepare('SELECT * FROM produits WHERE product_id='.$product_id.'');
        $request->execute(array());
        while ($donnees = $request->fetch())
        {
          $product_id = $donnees['product_id'];
          $product_titre = $donnees['product_titre'];
          $product_prix = $donnees['product_prix'];
          $product_images = $donnees['product_image'];
          $product_descrip = $donnees['product_descrip'];


          echo "
          <div class='single_produit in_details'>
          <h3>".$product_titre."</h3>
          <section class='show_details'  >
             <img class='img-thumbnail img-responsive' src='espace_admin/product_images/".$product_images."' width='730px' height='730px'>
             <h4 class='describe'>".$product_descrip."</h4>
          </section>
          <p align='center'><strong> prix: " .$product_prix." € </strong></p>
            <section id='button_in_details'>
                <a href='index.php' style=float:left' class='details'><button class='btn btn-deflaut'>retour</button></a>
                <a href='index.php?panier=".$product_id."' style=float:right'><button id='add' class='btn btn-info' onClick='post();'>ajouter au panier</button></a>
            </section>
          </div>  ";
        }
      }
    }

// ici on affiche les produits par categories


function getCategorieProduct()
  {
    if(isset($_GET['categorie']))
    {
      $categorie_id = $_GET['categorie'];
        $db = database();

        // on recupere tous les elements de la table produits
        $requestCategorie = $db->prepare('SELECT * FROM produits WHERE product_cat='.$categorie_id.'');
        $requestCategorie->execute(array());
        $allCategorie = $requestCategorie->fetchAll();
        return $allCategorie;
    }
  }
// on affiche les produits par marque


function getMarqueProduct()
  {
    if (isset($_GET['marque']))
    {
      $marque_id = $_GET['marque'];
        $db = database();

        // on recupere tous les elements de la table produits
        $requestMarque = $db->prepare('SELECT * FROM produits WHERE product_marque='.$marque_id.'');
        $requestMarque->execute(array());
        $marquesProduct = $requestMarque->fetchAll();
        return $marquesProduct;
      }
    }



// -----------la fonction pour afficher tout les produits----------------------


  function ToutProduits()
  {
    $db = database();
    $request = $db->query('SELECT * FROM produits');
    $tousProduits = $request->fetchAll();
    return $tousProduits;
  }
// ---------------------la function suivante est le resultat pour une recherche faite dans barre-----------


if (isset($_GET['find']))
{
  function resultRecherche()
  {
    $recherche = $_GET['mot_cles'];
    $db = database();
    $request = $db->query("SELECT * FROM produits WHERE product_motcles like '%$recherche%'");
    while ($donnees = $request->fetch())
    {
      $product_id = $donnees['product_id'];
      $product_titre = $donnees['product_titre'];
      $product_marque = $donnees['product_marque'];
      $product_cat = $donnees['product_cat'];
      $product_prix = $donnees['product_prix'];
      $product_images = $donnees['product_image'];


      echo "
      <div class='single_produit'>
      <h3>".$product_titre."</h3>
      <img src='espace_admin/product_images/".$product_images."'>
      <section align='center'>
      <p align='center'><strong> ".$product_prix." € </strong></p>
      <a href='details.php?details=".$product_id."' style=float:left' class='details'><button class='btn btn-deflaut'>Details</button></a>
      <a href='index.php?panier=".$product_id."' style=float:right'><button id='add' class='btn btn-info'>ajouter au panier</button></a>
      </section>
      </div>  ";
    }
  }
}
//------------------------------------------- -----------------------------------------------
