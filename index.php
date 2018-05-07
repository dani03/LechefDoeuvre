<?php
session_start();
require_once("controllers/marquesController.php");
require_once("controllers/getProductsController.php");
require("controllers/categoriesController.php");
require_once("controllers/productCategoriesController.php");
require_once("controllers/productMarquesController.php");
require_once("controllers/panierController.php");
 require "vues/headPage.php";
 require "vues/view.php";
articlePanier();
