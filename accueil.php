<!DOCTYPE html>
<html lang="fr">
  <head>
	<title>Run in Wild</title>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

	<meta charset="utf-8">
	<meta name="keywords" content="sport, chaussures, running, basket, course, jogging, cher, en ligne, confort/able, ergonomique, courir, grande, petite, taille, acheter, homme, femme, marque, mizuno, asics, adidas, nike, noir, bleu, blanc, rouge, rose, vert, orange, violet, jaune, run in wild, pronatrice, supinatrice, universelle, asphalte, chemin, piste"/>
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
	<!-- Navbar transparente-->
	<div class="navbar navbar-transparente">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<!-- Logo -->
				<ul class="nav navbar-nav">
					<a href="accueil.php"><img src="logo_blanc.png" alt="Logo" width="100px" height="auto"></a>
				</ul>
				<!--Menu transparent-->
				<ul class="nav navbar-nav navbar-right">
				<?php
					echo "<li class='marque_bouton'>
                            <form method='POST' action='liste_produit.php'>
                            	<input type='text' style='display:none;' name='genre' value=''/>
                            	<input type='text' style='display:none;' name='prix' value=''/>
                            	<input type='text' style='display:none;' name='surface' value=''/>
                            	<input type='text' style='display:none;' name='foulee' value=''/>
								<input type='text' style='display:none;' name='couleur' value=''/>
                            	<input type='text' style='display:none;' name='marque' value=''/>
                            	<input class='btn' type='submit' name='Valider' value='Toutes'/>
                            </form>
                           </li>";
				?>
                <?php
					require_once("PDOConnexion.php");
					function list_marque(){
						PDOConnexion::setParameters("wild","phpsrc","tpphp");
						$db=PDOConnexion::getInstance();
						$sql="SELECT * FROM marque";
						$sth=$db->prepare($sql);
						$sth->setFetchMode(PDO::FETCH_ASSOC);
						$sth->execute();
						return $sth->fetchAll();
					}

					$sth=list_marque();
					foreach($sth as $val){
						echo "<li class='marque_bouton'>
								<form method='POST' action='liste_produit.php'>
									<input type='text' style='display:none;' name='genre' value=''/>
									<input type='text' style='display:none;' name='prix' value=''/>
									<input type='text' style='display:none;' name='surface' value=''/>
									<input type='text' style='display:none;' name='foulee' value=''/>
									<input type='text' style='display:none;' name='couleur' value=''/>
									<input type='text' style='display:none;' name='marque' value='" . $val['nom'] . "'/>
									<input class='btn' type='submit' name='Valider' value='" . $val['nom']. "'/>
								</form>
							</li>";
					}
				?>
				</ul>
			</div>
		</div>
	</div>
	<div class="jumbotron">
		<div class="container">
		
		</div>
	</div>
	
	<div class="container" id="orange">
		<div class="row">
			<h2>Promotions</h2>
			<div class="col-lg-6 callout text-center">
				<p>-20% sur la deuxième paire achetée</p>
			</div>
			<div class="col-lg-6 callout text-center">	
				<p>Promotions sur toute la marque Adidas</p>
			</div>	
		</div>
	</div>

	<div class="container" id="blanc">
		<h2>Nouveautés</h2>	
	</div>	

	<div id="grisnews">
		<div class="row">
			<div class="news">
				<?php
					require_once("PDOConnexion.php");
					function produits(){							
						PDOConnexion::setParameters("wild","phpsrc","tpphp");
						$db=PDOConnexion::getInstance();
						$sql="SELECT url_image, nom, modele, prix, chaussure.id FROM chaussure, marque, foulee, surface 
								where marque.id=chaussure.marque 
									and chaussure.foulee=foulee.id 
									and chaussure.surface=surface.id
								ORDER BY chaussure.id DESC LIMIT 5";
						$sth=$db->prepare($sql);
						$sth->setFetchMode(PDO::FETCH_ASSOC);
						$sth->execute();
						return $sth->fetchAll();
					}
					$sth=produits();
					affichage($sth);
					function affichage($sth){
						echo "<div id='chaussures'>";
						foreach ($sth as $resultat){
							foreach ($resultat as $key=>$val){
								switch($key){
									case "url_image":
										echo "<div id='nouveaute'>
												<figure>
													<img src='".$val."' width='100px'/>";
										break;
									case "nom":
										echo "<figcaption>".$val."<br>";
										break;
									case "modele":
										echo $val."<br>";
										break;
									case "prix":
										echo $val." €<br></figcaption>";
										break;
									case "id":
										echo "<p id='id' style='visibility:hidden'>".$val."</p></figure></div>";
								}
							}
						}
					}
				?>
			</div>
		</div>
	</div>

	<div id="blanc2">
	</div>

	<div id="footer">
		<div class="container">
			<p>Created by Yordles</p>
		</div>
	</div>
  </body>
  <script src="jquery/dist/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	$("div #nouveaute").click(function(){
		var id = $('p',this).text(); 
		console.log(id);
		$.get("selection_produit.php",
			{"id":id},
			function(result){
				document.location.href="selection_produit.php?id="+id+"";
			
			}, "text" );
	});
  </script>
</html>