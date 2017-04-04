<!DOCTYPE html>
<html lang="fr">
  <head>
	<title>Run in Wild</title>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

	<meta charset="utf-8">
  </head>
  <body>
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
			<li><a href="inscription.php">INSCRIPTION</a></li>
			<li><a href="connexion.php">CONNEXION</a></li>
		  </ul>
		  <!--Barre de recherche-->
		  <form class="navbar-form navbar-left">
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
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
		<div class="row">
			<div class="col-lg-2 callout">
				<div id="logo">
					<a href="accueil.php"><img src="logo_noir.png" alt="Logo" width="100px" height="auto"></a>
				</div>
			</div>
			<div class="col-lg-10 callout">
				<?php
					session_start();
					$id=$_GET['id'];
					
					require_once("PDOConnexion.php");
					function produit($id){							
						PDOConnexion::setParameters("wild","phpsrc","tpphp");
						$db=PDOConnexion::getInstance();
						$sql="SELECT marque.nom, modele, genre, foulee.type foulee, surface.type surface, couleur, poids, prix, taille, couleur, description, url_image FROM chaussure, marque, foulee, surface, pointure 
								where marque.id=chaussure.marque 
								and chaussure.foulee=foulee.id 
								and chaussure.surface=surface.id
								and chaussure.id=:id";
						$sth=$db->prepare($sql);
						$sth->setFetchMode(PDO::FETCH_ASSOC);
						$sth->execute(array(":id"=>$id));
						return $sth->fetchAll();
					}
					$sth=produit($id);
					affichage($sth);
										
					function affichage($sth){
						echo "<div id='selection_chaussure'>";
						foreach ($sth as $resultat){
							foreach ($resultat as $key=>$val){
								switch($key){
									case "nom":
										echo "<h2>".$val." -";
										$_SESSION['panier']['modele'] = $val;
										break;
									case "modele":
										echo " ".$val."</h2>
												<div id='caracteristiques'>
													<a href='accueil.php'>Retour</a> | <a href='liste_produit.php'>Marque</a> > <a href='selection_produit.php'>Chaussures</a>
													<div id='produit'>
														<div class='container'>
															<div class='row'>
																<div class='col-lg-3'>
																	<h3>Catégories</h3>
																	<p>Sexe: ";
										break;
									case "genre":
										echo $val."</p>";
										break;
									case "foulee":
										echo "<p>Foulée: ".$val."</p>";
										break;
									case "surface":
										echo "<p>Surface: ".$val."</p>";
										break;
									case "couleur":
										echo "<p>Couleur: ".$val."</p>";
										break;	
									case "poids":
										echo "<p>Poids: ".$val."g</p>";
										break;
									case "prix":
										echo "<h3>Prix: ".$val."€</h3>";
										$_SESSION['panier']['prix'] = $val;
										break;
								}
							}
							return ;
						}
					}
					
					function pointure(){							
						PDOConnexion::setParameters("wild","phpsrc","tpphp");
						$db=PDOConnexion::getInstance();
						$sql="SELECT taille FROM pointure";
						$sth=$db->prepare($sql);
						$sth->setFetchMode(PDO::FETCH_ASSOC);
						$sth->execute();
						return $sth->fetchAll();
					}
					
					$pointure=pointure();
					affiche_pointure($pointure);
					
					function affiche_pointure($sth){
						echo "<h3>Pointure : </h3><form action='panier.php'><select name='pointure' size='1'>";
						foreach($sth as $val){
							foreach($val as $key=>$valeur){
								if($key=="taille"){
									echo "<option value=".$valeur.">".$valeur."</option>";
								}
							}
						}
						echo "</select><br/>
							  <input type='submit' value='Ajouter au panier' id='panier'></form>
							  </div>";
					}
					
					function image($id){
						PDOConnexion::setParameters("wild","phpsrc","tpphp");
						$db=PDOConnexion::getInstance();
						$sql="SELECT url_image FROM chaussure WHERE chaussure.id=:id";
						$sth=$db->prepare($sql);
						$sth->setFetchMode(PDO::FETCH_ASSOC);
						$sth->execute(array(":id"=>$id));
						return $sth->fetch();
					}
					
					$image=image($id);
					affiche_image($image);
					
					function affiche_image($sth){
						echo "<div class='col-lg-7'>
								<img src=".$sth["url_image"]." alt='chaussure'>";
					}
					
					function description($id){							
						PDOConnexion::setParameters("wild","phpsrc","tpphp");
						$db=PDOConnexion::getInstance();
						$sql="SELECT description FROM chaussure WHERE chaussure.id=:id";
						$sth=$db->prepare($sql);
						$sth->setFetchMode(PDO::FETCH_ASSOC);
						$sth->execute(array(":id"=>$id));
						return $sth->fetch();
					}
					
					$description=description($id);
					affiche_description($description);
					
					function affiche_description($sth){
						echo "<h3>Description</h3>
							  <p id='description'>".$sth["description"]."</p></div>";
					}
					
				?>
				
			</div>	
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