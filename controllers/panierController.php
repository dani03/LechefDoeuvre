<?php
require(__DIR__.'/../modeles/panierModel.php');


function articlePanier()
{
  if (isset($_GET["panier"]))
  {
      $product_id = htmlspecialchars($_GET["panier"]);
      $panier = decomptePanier($product_id);
      $_SESSION['product_'.$_GET['panier']] += 1;

      return $_SESSION['product_'.$_GET['panier']];
  }
}



// function pour diminuer la quantité d'un produit

function removeArticle()
{
  if(isset($_GET['remove']))
  {
    $_SESSION['product_'.$_GET['remove']]--;

    if($_SESSION['product_'.$_GET['remove']] < 1)
    {
      echo "<p>votre produit n'est plus dans votre panier</p>";

    }

  }
}


function deleteDuPanier()
{
  $message = "";
  if(isset($_GET['delete']))
  {
    $_SESSION['product_'.$_GET['delete']] = '0';
      $message = "article supprimé du panier";
  }

}

/**
 * [displayInPanier permet d'afficher les produits et leurs caracterisque dans le panier
 *                   les functions substr et strlen permet de soustraire les caracteres pour en retirer l'id]
 * @return [type] [description]
 */
function displayInPanier($name)
{
  foreach ($_SESSION as $name => $value)
  {
    if ($value > 0)
    {
      if(substr($name, 0, 8) == "product_")
      {
        $length = strlen($name - 8);
        $id = substr($name, 8, $length);
        displayArticleInPanier($id);
        return displayArticleInPanier($id);
      }
    }
  }
}

  // function giveId($param)
  // {
  //   $length = strlen($param - 8);
  //   $id = substr($param, 8, $length);
  //   return $id;
  // }
