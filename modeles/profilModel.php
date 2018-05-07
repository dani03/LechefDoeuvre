<?php
require("database.php");
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
