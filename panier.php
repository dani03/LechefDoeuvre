<?php
session_start();
require("controllers/panierController.php");
require_once("vues/panierVue.php");

removeArticle();
deleteDuPanier();
