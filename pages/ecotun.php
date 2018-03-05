<?php 
session_start();
if(isset($_SESSION['utilisateur'])){
    $utilisateur = $_SESSION['utilisateur'];
}
?>

<html>
<body>

    <link rel="stylesheet" href="../css/Style.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    
<!-- ajout du bandeau en haut de page -->

    <div class="container-fluid bandeau"></div>

    <h1>E-coTun.com</h1>
    
<!-- Creation barre de recherche -->

    <div class="form-group_barre_recherche">
    <div class="input-group input-group-md icon-addon addon-md">
        <input type="text" placeholder="Texte" name="" id="schbox" class="form-control">
        <i class="icon icon-search"></i>
        <span class="input-group-btn">
            <button type="submit" class="btn btn-inverse">Rechercher</button>
        </span>
    </div>
    </div>

<!-- Creation barre de navigation -->

    <div class="navbar navbar-default">

  <div class="navbar-header">

    <a class="navbar-brand" href="ecotun.php">ACCUEIL</a>

  </div>

  <ul class="nav navbar-nav">

    <li class="active"><a href="smartphone.html">Smartphone</a></li>

    <li><a href="informatique.html">Informatique</a></li>

    <li><a href="console_gaming.html">Console & Gaming</a></li>

    <li><a href="#">Contact</a></li>

  </ul>

</div>


    <div class="inscription">
        <a href="formulaire.html" target="_blank">Inscription</href>
        </a>
    </div>

    <div class="connexion">
        <?php if(isset($utilisateur)){
            echo 'Bonjour ' . $utilisateur;
            echo '<a href="../scripts/logout.php"> Deconnexion</a>';
        }
        else
        {
        ?>

<!-- ajout de la zone de connection (login et mots de passe) -->


<form action="../scripts/connexion.php" method="post">

  <div class="form-group_login">
    <label for="exampleInputEmail1">Nom d'utilisateur</label>
    <input type="text" class="form-control" name="nom_utilisateur" id="nom_utilisateur" aria-describedby="emailHelp" placeholder="Entrer le nom d'utilisateur"> 
  </div>

  <div class="form-group_password">
    <label for="exampleInputPassword1">Mots de passe</label>
    <input type="password" class="form-control" name="mdp" id="mdp" placeholder="mots de passe">
  </div>

  <button type="submit" class="btn btn-primary">Connection</button>
</form>
        

        
        <?php 
        } 
        ?>
    </div>

    <div class="panier">
        <form action="./panier.php" method="post">
        <button type="submit">PANIER</button></form>

    </div>

</body>