<?php

$bdd = new PDO('mysql:host=localhost;dbname=ecotun;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


$req = $bdd->prepare('INSERT INTO formulaire_inscription(nom, prenom, nom_utilisateur, mdp) VALUES(?,?,?,?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['nom_utilisateur'],$_POST['mdp']));


echo 'Information bien enregistré!';


?>