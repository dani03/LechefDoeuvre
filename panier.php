<?php
session_start();
 require("functions/functions.php");

 if(isset($_GET['panier']))
 {
   $produit_id = $_GET['panier'];
   
 }
 ?>
