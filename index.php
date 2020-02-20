<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=<nomdevotrebdd>;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$param="";
$requete = $bdd->prepare("<votrerequete>");
$requete->bindParam(':param', $param);
$requete->execute();
$resultat = $requete->fetchAll();