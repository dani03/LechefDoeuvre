<?php
require("link.php");

  $articles = articlePanier();
  if(is_array($articles) || is_object($articles))
  {
    foreach($articles as $article)
    {
      $article_qte = $article["product_quantite"];
      if ($article_qte < $_SESSION['product_'.$_GET['panier']])
      {
        echo "<p> les nombres de produit disponibles est pour cet article est de ".$article_qte."</p>";
        header("location: panier.php");
      }
      else
      {
        $_SESSION['product_'.$_GET['panier']] += 1;
      }
    }

  }


  // echo $_SESSION['product_'.$_GET['panier']];



?>

<div class="tableauPanier">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>produit</th>
        <th>prix</th>
        <th>quantité</th>
        <th>total</th>
        <th>actions</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $totalArticle = 0;
      if (isset($_GET['panier'], $_SESSION['product_'.$_GET['panier']]))
      {
            $total = "";
            $id = $_SESSION['product_'.$_GET['panier']];
            $_SESSION['total_article'] =  $totalArticle += $id;
            $displayArticles = displayInPanier($id);

            if (is_array($displayArticles) || is_object($displayArticles))
            {
              foreach ($displayArticles as $displayArticle)
              {
                $product_titre = $displayArticle['product_titre'];
                $product_prix =  $displayArticle['product_prix'];
                $product_quantite =  $displayArticle['product_quantite'];
                $product_id =  $displayArticle['product_id'];

                $prixTotal = $product_prix * $_SESSION['product_'.$_GET['panier']];
                $_SESSION['total_items'] = $total += $prixTotal;
                echo "
                      <tr>
                        <td>".$product_titre."</td>
                        <td>".$product_prix." €</td>
                        <td>".$_SESSION['product_'.$_GET['panier']]."</td>
                        <td>".$prixTotal."€</td>
                        <td>
                            <a class='btn btn-warning' href='panier.php?remove=".$product_id."'><span class='glyphicon glyphicon-minus'></span></a>
                            <a class='btn btn-success' href='panier.php?panier=".$product_id."'><span class='glyphicon glyphicon-plus'></span></a>
                            <a class='btn btn-danger' href='panier.php?delete=".$product_id."'><span class='glyphicon glyphicon-remove'></span></a>
                        </td>
                      </tr>";
              }

            }
        }


      ?>


    </tbody>
  </table>


  <div class="col-xs-4 pull-right">
    <h2>totaux</h2>
    <table class="table table-bordered" cellspacing="0">
      <tr>
        <th>articles:</th>
        <td><span class="amount">
          <?php
          if (isset($_SESSION['total_article']))
            {
              echo $totalArticle;
            }

           ?>
        </span></td>
      </tr>
      <tr>
        <th>prix total:</th>
        <td><span class="amount">
          <?php if (isset($_SESSION['total_items']))
            {
              echo $_SESSION['total_items']. "€";
            }
          ?>
        </span></td>
      </tr>
    </table>
  </div>
</div>
