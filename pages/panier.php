<?php

session_start();
include_once("../scripts/fonctions_panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On verifie que $p soit un float
   $p = floatval($p);

   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}
?>


<link rel="stylesheet" href="../css/Style.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    
<!-- ajout du bandeau en haut de page -->

<div class="container-fluid bandeau"></div>
    

<h1>E-coTun.com</h1>

<div class="form-group_barre_recherche">
        <div class="input-group input-group-md icon-addon addon-md">
            <input type="text" placeholder="Texte" name="" id="schbox" class="form-control">
            <i class="icon icon-search"></i>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-inverse">Rechercher</button>
            </span>
        </div>
        </div>

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


<h2>Votre panier</h2>



<form method="post" action="panier.php">
<table style="width: 500px">
	<tr>
		<td colspan="4">Votre panier</td>
	</tr>
	<tr>
		<td>Libellé</td>
		<td>Quantité</td>
		<td>Prix Unitaire</td>
		<td>Action</td>
		
	</tr>

	
	<?php
	if (creationPanier())
	{
	   $nbArticles=count($_SESSION['panier']['libelleProduit']);
	   if ($nbArticles <= 0)

	   echo "<tr><td>Votre panier est vide </ td></tr>";
	   


	   

	   else
	   {
	      for ($i=0 ;$i < $nbArticles ; $i++)
	      {
	         echo "<tr>";
	         echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
	         echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
	         echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
	         echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">Retirer l'article</a></td>";
	         echo "</tr>";
	      }

	      echo "<tr><td colspan=\"2\"> </td>";
	      echo "<td colspan=\"2\">";
	      echo "Total : ".MontantGlobal();
		  echo "</td></tr>";
		  
		  echo "<tr><td colspan=\"4\">";
	      echo "<input type=\"submit\" value=\"Rafraichir\"/>";
	      echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
	  
		  echo "<tr><td colspan=\"4\">";
		  echo '<a href="smartphone.html"> Continuer mes achats </a>';
		  
		  
	      

		  echo "</td></tr>";
		  
	   }
	}
	?>
</table>
</form>
</body>
</html>