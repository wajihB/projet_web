<?php
session_start();
try 
    {

$bdd = new PDO('mysql:host=localhost;dbname=ecotun;charset=utf8', 'root', '');

    }

catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if(!isset($_POST['nom_utilisateur']) OR !isset($_POST['mdp'])) 
{
    die('Erreur : Les champs doivent être renseigné');
} 

if(strlen($_POST['nom_utilisateur']) == 0 OR strlen($_POST['mdp']) == 0) 
{
    die('Erreur : Les champs doivent être renseigné');
}


$user = $_POST['nom_utilisateur'];   // Memorisation des informations
$pwd = $_POST['mdp'];

$stmt = $bdd->prepare('SELECT nom_utilisateur, mdp FROM formulaire_inscription WHERE nom_utilisateur = ? and mdp =?');
$stmt->execute(array($user, $pwd));
$utilisateur = $stmt->fetch();
if($utilisateur){
    $_SESSION['utilisateur'] = $utilisateur['nom_utilisateur'];
    
    header('Location: ./ecotun.php');
}
?>
