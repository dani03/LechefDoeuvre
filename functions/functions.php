<?php
// connexion a la base de données
function database()
{
  try {
    $connexion = new PDO('mysql:host=localhost;dbname=CDEcommerce;charset=utf8', 'phpmyadmin','root');

  } catch (Exception $e) {
    die($e->getMessage());
  }
  return $connexion;
}
// on recupere les categories

function getCategories()
{
  $bdd = database();
  $statement = $bdd->prepare('SELECT * FROM categories');
  $statement->execute(array());
    while ($categorie = $statement->fetch()){
      $categorie_id = $categorie['categorie_id'];
      $categorie_titre = $categorie['categorie_titre'];
      echo "<li><a href='index.php?categorie=".$categorie_id."'>".$categorie_titre."</a></li>";
    }
}


function getMarques()
{
  $bdd = database();
  $req = $bdd->prepare('SELECT * FROM marques');
  $req->execute(array());
    while ($marque = $req->fetch()){
      $marque_id = $marque['marque_id'];
      $marque_titre = $marque['marque_titre'];
      echo "<li><a href='index.php?marque=".$marque_id."'".$marque_id."'>".$marque_titre."</a></li>";
    }


}

// on recupere les produits pour les afficher

function getProducts()
  {
    if (!isset($_GET['categorie']))
    {
        if (!isset($_GET['marque']))
        {

          $db = database();
          $request = $db->query('SELECT * FROM produits ORDER BY RAND() LIMIT 0,6');
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
            <a href='index.php?id=".$product_id."' style=float:right'><button id='add' class='btn btn-info'>ajouter au panier</button></a>
            </section>
            </div>  ";
          }
        }
      }
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
             <img src='espace_admin/product_images/".$product_images."' width='730px' height='730px'>
             <h4 class='describe'>".$product_descrip."</h4>
          </section>
          <p align='center'><strong> prix: " .$product_prix." € </strong></p>
            <section id='button_in_details'>
                <a href='index.php' style=float:left' class='details'><button class='btn btn-deflaut'>retour</button></a>
                <a href='index.php?id=".$product_id."' style=float:right'><button id='add' class='btn btn-info'>ajouter au panier</button></a>
            </section>
          </div>  ";
        }
      }
    }

// ici on affiche les produits par categories


function getCategorieProduct()
  {
    if (isset($_GET['categorie']))
    {
      $categorie_id = $_GET['categorie'];
        $db = database();

        // on recupere tous les elements de la table produits
        $requestCategorie = $db->prepare('SELECT * FROM produits WHERE product_cat='.$categorie_id.'');
        $requestCategorie->execute(array());
        while ($donneeCategorie = $requestCategorie->fetch())
        {
          $product_id = $donneeCategorie['product_id'];
          $product_titre = $donneeCategorie['product_titre'];
          $product_marque =$donneeCategorie['product_marque'];
          $product_cat = $donneeCategorie['product_cat'];
          $product_prix = $donneeCategorie['product_prix'];
          $product_images = $donneeCategorie['product_image'];

          // ensuite ont les affichent
          echo "
          <div class='single_produit'>
          <h3>".$product_titre."</h3>
          <img src='espace_admin/product_images/".$product_images."'>
          <section align='center'>
          <p align='center'><strong>".$product_prix." € </strong></p>
          <a href='details.php?details=".$product_id."' style=float:left' class='details'><button class='btn btn-deflaut'>Details</button></a>
          <a href='index.php?id=".$product_id."' style=float:right'><button id='add' class='btn btn-info'>ajouter au panier</button></a>
          </section>
          </div>  ";
        }
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
        while ($donneeMarque = $requestMarque->fetch())
        {
          $product_id = $donneeMarque['product_id'];
          $product_titre = $donneeMarque['product_titre'];
          $product_marque =$donneeMarque['product_marque'];
          $product_cat = $donneeMarque['product_cat'];
          $product_prix = $donneeMarque['product_prix'];
          $product_images = $donneeMarque['product_image'];

          // ensuite ont les affichent
          echo "
              <div class='single_produit'>
                  <h3>".$product_titre."</h3>
                  <img src='espace_admin/product_images/".$product_images."'>
                  <section align='center'>
                        <p align='center'><strong>".$product_prix." € </strong></p>
                        <a href='details.php?details=".$product_id."' style=float:left' class='details'><button class='btn btn-deflaut'>Details</button></a>
                        <a href='index.php?id=".$product_id."' style=float:right'><button id='add' class='btn btn-info'>ajouter au panier</button></a>
                  </section>
              </div>  ";
        }
      }
    }



// la fonction pour afficher tout les produits


  function ToutProduits()
  {
    $db = database();
    $request = $db->query('SELECT * FROM produits');
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
        <a href='index.php?id=".$product_id."' style=float:right'><button id='add' class='btn btn-info'>ajouter au panier</button></a>
      </section>
      </div>  ";
    }
  }
