<?php
session_start();
include_once("fonctions-panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
   $mo = (isset($_POST['mo'])? $_POST['mo']:  (isset($_GET['mo'])? $_GET['mo']:null )) ;
   $ma = (isset($_POST['ma'])? $_POST['ma']:  (isset($_GET['ma'])? $_GET['ma']:null )) ;
   $t = (isset($_POST['t'])? $_POST['t']:  (isset($_GET['t'])? $_GET['t']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $mo = preg_replace('#\v#', '',$mo);
   //On verifie que $p soit un float
   $p = floatval($p);

   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($q)){
      $quantite = array();
      $i=0;
      foreach ($q as $contenu){
         $quantite[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($mo,$ma,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($mo);
         break;

      Default:
         break;
   }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
	<title>Panier</title>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style2.css" rel="stylesheet">
	<meta charset="utf-8">
	<style>
		@import url("font-awesome/css/font-awesome.min.css");
		#gris2{
			background-color: #cbcbcb;
			padding:10px;
			height: 500px;
			margin-bottom: 10px;
		}
		#titres>td{
			font-weight: bold;
		}
	</style>
  </head>
  <body>
	<!-- Navbar grise-->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="inscription.php" id="inscrip">INSCRIPTION</a></li>
			<li><a href="connexion.php">CONNEXION</a></li>
		  </ul>
		  <!--Barre de recherche-->
			<form class="navbar-form navbar-left">
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
					<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Rechercher">
				</div>
			</form>
		  <!--Panier-->
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="panier.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>  PANIER</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<img src="logo_noir.png" alt="Logo" width="100px" height="auto">
	</div>
	<div class="container" id="blanc">
		<h2> Panier </h2>
			
		<div class="row">
				<p style="color:black"><a href="accueil.php">Accueil</a> > <a href="panier.php">Panier</a></p>
			</div>
			<div id="gris2">
				<div class="col-md-12">
					<form method="post" action="panier.php">
						<table style="width:100%">
							<thead>
							<tr id="titres">
								<td>Modèle</td>
								<td>Marque</td>
								<td>Taille</td>
								<td>Prix</td>
								<td>Action</td>
							</tr>
							</thead>
						<?php
							if (creationPanier())
							{
							   $nbArticles=count($_SESSION['panier']['modele']);
							   if ($nbArticles <= 0)
							   echo "<tr><td>Votre panier est vide </ td></tr>";
							   else
							   {
							      for ($i=0 ;$i < $nbArticles ; $i++)
							      {
							         echo "<tr>";
							         echo "<td>".htmlspecialchars($_SESSION['panier']['modele'][$i])."</ td>";
							         echo "<td>".htmlspecialchars($_SESSION['panier']['marque'][$i])."</ td>";
							         echo "<td>".htmlspecialchars($_SESSION['panier']['taille'][$i])."</ td>";
							         echo "<td>".htmlspecialchars($_SESSION['panier']['prix'][$i])."</td>";
							         echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['modele'][$i]))."\">XX</a></td>";
							         echo "</tr>";
							      }

							      echo "<tr><td colspan=\"2\"> </td>";
							      echo "<td colspan=\"2\">";
							      echo "Total : ".MontantGlobal();
							      echo "</td></tr>";

							      echo "<tr><td colspan=\"4\">";
							      echo "<input type=\"submit\" value=\"Rafraichir\"/>";
							      echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

							      echo "</td></tr>";
							   }
							}
							?>
				</table> 
				<p style="color:black;"> Code Promo : 
					<input type="text">
					<button type="submit">Valider</button></p>
				<button type="submit">Valider la commande</button>
			</form>
			</div>
		</div>
	<div id="footer">
		<div class="container">
			<p>Created by Yordles</p>
		</div>
	</div>
  </body>
  <script src="jquery/dist/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</html>