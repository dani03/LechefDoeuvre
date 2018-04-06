<?php

function database()
{
  try {
    $connexion = new PDO('mysql:host=localhost;dbname=CDEcommerce;charset=utf8', 'phpmyadmin','root');

  } catch (Exception $e) {
    die($e->getMessage());
  }
  return $connexion;
}
