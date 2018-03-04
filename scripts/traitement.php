<?php

try
{
    
$bdd = new PDO('mysql:host=localhost;dbname=ecotun;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

}

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO formulaire_inscription(nom, prenom, nom_utilisateur, mdp) VALUES(?,?,?,?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['nom_utilisateur'],$_POST['mdp']));

if(!isset($_POST['nom']) OR !isset($_POST['prenom']) OR !isset($_POST['nom_utilisateur']) OR !isset($_POST['nom_utilisateur'])) 
{
    die('Erreur : Les champs doivent être renseigné');
} 




header('Location: ../pages/ecotun.php');

?>