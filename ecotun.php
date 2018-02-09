<?php 
session_start();
if(isset($_SESSION['utilisateur'])){
    $utilisateur = $_SESSION['utilisateur'];
}
?>
<html>

<body background="./ecommerce.jpg">

    <link rel="stylesheet" href="Style.css" />

    <h1>E-coTun</h1>


    
    <p class="introduction">Livraison 3J ouvre // satisfait ou rembourse // qualite reconnu et norme CE</p>

    <br>

    <div class="barre_recherche">
        <form action="" class="recherche">
            <input class="champ" type="text" value="Rechercher un produit, une marque, une reference..." />
            <input class="bouton" type="submit" value="R" />
        </form>
    </div>

    <div class="inscription">
        <a href="./formulaire.html" target="_blank">Inscription</href>
        </a>
    </div>

    <div class="connexion">
        <?php if(isset($utilisateur)){
            echo 'Bonjour ' . $utilisateur;
            echo '<a href="logout.php">Deco</a>';
        }else{
        ?>
            <form action="connexion.php" method="post">  
            utilisateur : <input type="text" name="nom_utilisateur" id="nom_utilisateur"> 
            <br>
            password : <input type="text" name="mdp" id="mdp">
            <button type="submit">CONNEXION</buttontype></button>
                </form>
        <?php 
        } 
        ?>
    </div>

    <div class="panier">
        <form action="panier.php" method="post"></form>
        <button type="submit">PANIER</button>

    </div>

    <br>

    <table class="position_titre_produit">
        <tr>

            <div class="smartphone">
                <td>
                    <ul>
                        <a href="./smartphone.html"> Smartphone</a>
                    </ul>
                </td>
            </div>

            <div class="informatique">
                <td>
                    <ul>
                        <a href="./informatique.html"> Informatique</a>
                    </ul>
                </td>
            </div>

            <div class="console_gaming">
                <td>
                    <ul>
                        <a href="./console_gaming.html"> Console & Gaming</a>
                    </ul>
                </td>
            </div>
        </tr>
    </table>

</body>