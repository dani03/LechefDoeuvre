<?php
require "database.php";
// recuperation de l'image de l'utilisateur


function getImage($email)
{
    $db = database();
    $request = $db->prepare('SELECT * FROM utilisateurs WHERE user_email=:email');
    $request->bindParam('email', $email);
    $request->execute();
    $resultats = $request->fetchAll();
    return $resultats;
}

function insert_produit()
{
    $db = database();
    $statement = $db->prepare('SELECT * FROM marques');
    $statement->execute(array());
   if ($marque = $statement > 0) {

     while ($marque = $statement->fetch())
     {
       $marque_id = $marque['marque_id'];
       $marque_titre = $marque['marque_titre'];
       echo "<option value='".$marque_id."'>".$marque_titre."</option>";
     }
   }

}
// la fonction suivante est utilisée lorqu'on veut ajouter un produit en tant que admin
function ajouterProduit()
{
    if (isset($_POST['submited_insert']))
    {
    $bdd = database();
     $product_titre = $_POST['product_titre'];
     $product_marque = $_POST['product_marque'];
     $product_categorie = $_POST['product_cat'];
     $product_prix = $_POST['product_prix'];
     $product_motcles = $_POST['product_motcles'];
     $product_descrip = $_POST['product_descrip'];
     $product_quantite = $_POST['product_quantite'];
     $product_published_by = $_POST['product_published_by'];


    //  on recupere l'images
     $product_images_name = $_FILES['product_image']['name'];
     $product_image_tmp = $_FILES['product_image']['tmp_name'];

    //  on upload l'image dans le dossier cree(product_images)
     move_uploaded_file($product_image_tmp,"espace_admin/product_images/$product_images_name");
    //  on insert dans la base de données
         $insertion_bdd = $bdd->prepare('INSERT INTO produits(product_titre,product_cat,product_prix,product_marque,product_descrip,product_image,product_motcles,product_quantite,product_published_by) VALUES(:product_titre, :product_cat, :product_prix, :product_marque, :product_descrip, :product_image, :product_motcles,:product_quantite,:product_published_by)');
         $insertion_bdd->execute(array(
           'product_titre' => $product_titre,
           'product_cat' => $product_categorie,
           'product_prix' => $product_prix,
           'product_marque' => $product_marque,
           'product_descrip' => $product_descrip,
           'product_image' => $product_images_name,
           'product_motcles' => $product_motcles,
           'product_quantite' => $product_quantite,
           'product_published_by' => $product_published_by
     ));
     echo "<script>alert('le produit a bien été mis en vente!')</script>";
    }
}

// on veut ajouter une categories dans le panelle administration

  function ajouterCategorie()
  {
  $db = database();
  $request = $db->prepare('SELECT * FROM categories');
  $request->execute(array());
  if ($categorie = $request > 0)
  {

      while ($categorie = $request->fetch())
      {
       $categorie_id = $categorie['categorie_id'];
       $categorie_titre = $categorie['categorie_titre'];
       echo "<option value='".$categorie_id."'>".$categorie_titre."</option>";
      }
  }
}
// on cree la fonction qui permet de modifier son profil

function takeUser($user)
{
  $db = database();
  $request = $db->prepare('SELECT * FROM utilisateurs WHERE user_email=:email');
  $request->execute(array(
    'email' => $user
  ));
  $utilisateur = $request->fetchAll();
    return $utilisateur;
}

// function updateUser($name, $password, $email, $pays, $ville, $contact, $photo, $adresse, $user)
// {
//
//   $db = database();
//   $update = $db->prepare("UPDATE utilisateurs SET user_name = :nvName, user_password= :password, user_email= :nvEmail, user_pays= :nvPays, user_ville= :nvVille, user_contact= :nvContact, user_photo= :nvPhoto, user_adresse= :nvAdresse WHERE user_id= '.$user.'");
//    if ( $update->execute(
//     array(
//           'nvName' => $name,
//           'password' => $password,
//           'nvEmail' => $email,
//           'nvPays' => $pays,
//           'nvVille' => $ville,
//           'nvContact' => $contact,
//           'nvPhoto' => $photo,
//           'nvAdresse' => $adresse,
//
//         )
//       )
//     ) {
//         echo 'O';
//         $message = "<p class='alert alert-success'> votre profil à bien été modifié</p>";
//    }
//    else {
//      echo "non";
//       $message = "<p class='alert alert-danger'> une ereur c'est produite</p>";
//    }
//   return $message;
// }

// pour changer les mot de passe

// function changePass($email, $actuelPassword)
// {
//   $db = database();
//   $request = $db->prepare("SELECT * FROM utilisateurs WHERE user_password = :motDePasse AND user_email= :email");
//   $request->execute(array(
//     'motDePasse' => $actuelPassword,
//      'user_email' => $email
//   ));
//
// }

function ID_USER($id)
{
  $db = database();
  $request = $db->prepare('SELECT * FROM utilisateurs WHERE user_id= ?');
  $request->execute(array($id));
  $user = $request->fetchAll();
  return $user;
}

function updateUser($userName, $id)
{
  $bdd = database();
  $updating = $bdd->prepare('UPDATE  utilisateurs SET user_name = :user_name WHERE id ='.$id.'');
   $response = $updating->execute(array(
    'user_name' => $userName
  ));
  return $response ;
}
// supprimer un compte
function deleteAcount()
{
  $db = database();
   $_SESSION['user_email'];

  $requete = $db->prepare('DELETE FROM utilisateurs WHERE user_email = ?');
    $requete->execute(array($_SESSION['user_email']));
    session_destroy();
    header("location: index.php");

}
