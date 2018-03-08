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

    <div class="container-fluid_bandeau"></div>
    
    
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

<!-- création du lien vers page d'inscription -->

    <div class="inscription">
        <a href="formulaire.html"</href>
        <button type="button" class="btn btn-secondary btn-lg">Inscription</button></a>
    </div>

<!--affiche Bonjour avec le nom de l'utilisateur lorsqu'il est connecté et
ferme la session lorsqu'il appuie sur le bouton deconnection -->

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

            <div class="zone_connection">
                <div class="form-group_identifiant">
                    <div class="col-md-8"><input name="nom_utilisateur" placeholder="Idenfiant" class="form-control" type="text" id="nom_utilisateur"/></div>
                </div> 
                <div class="form-group_mdp">
                    <div class="col-md-8"><input name="mdp" placeholder="Mot de passe" class="form-control" type="password" id="mdp"/></div>
                </div> 
                <div class="form-group">
                <div class="col-md-offset-0 col-md-8"><input  class="btn btn-success btn btn-success" type="submit" value="Connexion"/></div>
            </div>
        </form>       
    </div>
        
        <?php 
        } 
        ?>
    </div>
<!-- création du lien vers page panier -->
    <div class="panier">
        <form action="./panier.php" method="post">
            <button type="submit" class="btn btn-primary btn-lg">PANIER</button>
        </form>
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
    <div class="carousel-caption">La puissance à l'état pur!</div>
    </div>   
    <!-- Page 2 -->
    <div class="item"> 
    <div class="carousel-page"><img src="../images/iphone.jpg" class="img-responsive img-rounded" 
    style="margin:0px auto;"  /></div> 
    <div class="carousel-caption">L'arnaque à l'état pur</div>
    </div>  
    <!-- Page 3 -->
    <div class="item">  
    <div class="carousel-page">
    <img src="../images/samsung.jpg" class="img-responsive img-rounded" 
    style="margin:0px auto;max-height:100%;"  />
    </div>  
    <div class="carousel-caption">Le bon compromis</div>
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

    
    <div class="container-fluid_bas"></div>
    
    <script type="text/javascript" src="../scripts/bootstrap.js"></script> 
    <script type="text/javascript" src="../scripts/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
 

</body>