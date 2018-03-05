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
        <a href="formulaire.html"</href>
        
        <button type="button" class="btn btn-secondary btn-lg">Inscription</button></a>
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

<div class="fixed-top">
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
</div>
        

        
        <?php 
        } 
        ?>
    </div>

    <div class="panier">
        <form action="./panier.php" method="post">
        <button type="submit" class="btn btn-primary btn-lg">PANIER</button></form>
        

    </div>

    <div id="my_carousel" class="carousel slide" data-ride="carousel">
    <!-- Bulles -->
    <ol class="carousel-indicators">
    <li data-target="#my_carousel" data-slide-to="0" class="active"></li>
    <li data-target="#my_carousel" data-slide-to="1"></li>
    <li data-target="#my_carousel" data-slide-to="2"></li>
    </ol>
    <!-- Slides -->
    <div class="carousel-inner">
    <!-- Page 1 -->
    <div class="item active">  
    <div class="carousel-page">
    <img src="../images/pc_msi.jpg" class="img-responsive" style="margin:0px auto;" />
    </div> 
    <div class="carousel-caption">Page 1 de présentation</div>
    </div>   
    <!-- Page 2 -->
    <div class="item"> 
    <div class="carousel-page"><img src="../images/iphone.jpg" class="img-responsive img-rounded" 
    style="margin:0px auto;"  /></div> 
    <div class="carousel-caption">Page 2 de présentation</div>
    </div>  
    <!-- Page 3 -->
    <div class="item">  
    <div class="carousel-page">
    <img src="../images/samsung.jpg" class="img-responsive img-rounded" 
    style="margin:0px auto;max-height:100%;"  />
    </div>  
    <div class="carousel-caption">Page 2 de présentation</div>
    </div>     
    </div>
    <!-- Contrôles -->
    <a class="left carousel-control" href="#my_carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#my_carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
    </div>

    
    <script type="text/javascript" src="../scripts/bootstrap.js"></script>
   
    <script type="text/javascript" src="../scripts/jquery-3.3.1.js"></script>
    


</body>