<!DOCTYPE html>
<html lang="fr">
  <head>
	<title>Run in Wild</title>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

	<meta charset="utf-8">
  </head>
  <body onload="load()">
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
				<h1>Run in wild</h1>
			</div>
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


	<div class="container">
		<div class="row">
			<div class="col-lg-2 callout" id="espace">
				<a href="accueil.php">Retour</a>
				<div id="criteres">
					<div class="container">
						<div class="row">
					<div class="col-ms-6">
					<h3>Catégories</h3><br/>
					<form method="POST" action="">
					<p>Sexe</p> 
					<select name="genre" size="1">
						<option value=""></option>
						<option value="Homme">Homme</option>
						<option value="Femme">Femme</option>
						<br/>
					</select>
					<p name="taille" id="taille" value="taille">Taille</p>
					<select name="taille" size="1">
					<?php
						require_once("PDOConnexion.php");
						function list_taille(){
							PDOConnexion::setParameters("wild","phpsrc","tpphp");
							$db=PDOConnexion::getInstance();
							$sql="SELECT distinct taille FROM pointure";
							$sth=$db->prepare($sql);
							$sth->setFetchMode(PDO::FETCH_ASSOC);
							$sth->execute();
							return $sth->fetchAll();
						}
						
						$sth=list_taille();
						foreach($sth as $val){
							foreach($val as $key=>$valeur){
								if($key=="taille"){
									echo "<option value=".$valeur.">".$valeur."</option>";
								}
							}
						}
					?>
					</select>
					<p>Couleur</p><select name="couleur" size="1">
						<option value=""></option>
						<?php
							
							session_start();
							function list_couleur(){
								PDOConnexion::setParameters("wild","phpsrc","tpphp");
								$db=PDOConnexion::getInstance();
								$sql="SELECT distinct couleur FROM chaussure";
								$sth=$db->prepare($sql);
								$sth->setFetchMode(PDO::FETCH_ASSOC);
								$sth->execute();
								return $sth->fetchAll();
							}
							
							$sth=list_couleur();
							foreach($sth as $val){
								foreach($val as $key=>$valeur){
									if($key=="couleur"){
										echo "<option value=".$valeur.">".$valeur."</option>";
									}
								}
							}
						?>
					</select>
					<br/>
					</br>
					<p>Prix</p>
					<?php
						
						function list_prix(){
							PDOConnexion::setParameters("wild","phpsrc","tpphp");
							$db=PDOConnexion::getInstance();
							$sql="SELECT min(prix), max(prix) FROM chaussure";
							$sth=$db->prepare($sql);
							$sth->setFetchMode(PDO::FETCH_ASSOC);
							$sth->execute();
							return $sth->fetchAll();
						}
						
						$sth=list_prix();
						foreach($sth as $val){
							$i=0;
							foreach($val as $key=>$valeur){
								if($i==0){
									$min=$valeur;
								}
								else if($i==1){
									$max=$valeur;
								}
								$i++;
							}	
						}
						echo "<input name='prix' type='range' min=".$min." max=".$max." value=".$max." step='10' oninput='document.getElementById('AfficheRange').textContent=value' />";
						echo "<p><span id='AfficheRange'>".$min." - </span>";
						echo "<span id='AfficheRange'>".$max."</span>";
						$_SESSION["min"]=$min;
					?>
					</div>
					<br>
					<p>Surface</p>
					<select name="surface" size="1">
						<option value=""></option>
						<?php
							function list_surface(){
								PDOConnexion::setParameters("wild","phpsrc","tpphp");
								$db=PDOConnexion::getInstance();
								$sql="SELECT * FROM surface";
								$sth=$db->prepare($sql);
								$sth->setFetchMode(PDO::FETCH_ASSOC);
								$sth->execute();
								return $sth->fetchAll();
							}
							
							$sth=list_surface();
							foreach($sth as $val){
								foreach($val as $key=>$valeur){
									if($key=="type"){
										echo "<option value=".$valeur.">".$valeur."</option>";
									}
								}
							}
						?>
					</select>
					</br>
					</br>
					<p>Foulées</p>
					<select name="foulee" size="1">
						<option value=""></option>
						<?php
							function list_foulee(){
								PDOConnexion::setParameters("wild","phpsrc","tpphp");
								$db=PDOConnexion::getInstance();
								$sql="SELECT * FROM foulee";
								$sth=$db->prepare($sql);
								$sth->setFetchMode(PDO::FETCH_ASSOC);
								$sth->execute();
								return $sth->fetchAll();
							}
							
							$sth=list_foulee();
							foreach($sth as $val){
								foreach($val as $key=>$valeur){
									if($key=="type"){
										echo "<option value=".$valeur.">".$valeur."</option>";
									}
								}
							}
						?>
					</select>
					</br>
					</br>

					<div class="col-ms-6">
						<h3>Marques</h3>
						<form>
							<input type='radio' name="marque" value="" checked>Toutes</input><br/>
					
							<?php
								
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
									foreach($val as $key=>$valeur){
										if($key=="nom"){
											echo "<input type='radio' name='marque' value=".$valeur.">".$valeur."</input><br/>";
										}
									}
								}
							?>
							<input type="submit" name="Valider" value="Valider" onclick="effacer()">
						</form>
					</div>
				</div>
			</div>
		</div>	
	</div>
		<div class="col-lg-10 callout" id="liste">
			<h2>Les produits</h2>
			<div class="all_products">
			</div>
				<?php
					require_once("PDOConnexion.php");
					if(isset($_POST["Valider"])){
						echo "";
						if($_POST['genre']==NULL){
							$genre="";
						}
						else{
							$genre=$_POST['genre'];
						}
						$couleur=$_POST['couleur'];
						$prix=$_POST['prix'];
						$surface=$_POST['surface'];
						$foulee=$_POST['foulee'];
						$marque=$_POST['marque'];
						
						$sth=infos($genre, $couleur, $prix, $min, $surface, $foulee, $marque);
						affichage($sth);
					}
						
					function infos($genre, $couleur, $prix, $min, $surface, $foulee, $marque){
						PDOConnexion::setParameters("wild","phpsrc","tpphp");
						$db=PDOConnexion::getInstance();
						$sql="SELECT url_image, nom, modele, prix, chaussure.id FROM chaussure, marque, foulee, surface 
								where marque.id=chaussure.marque 
								and chaussure.foulee=foulee.id 
								and chaussure.surface=surface.id ";
								
						$tableau="";
						
						if($genre!="" || $genre!=NULL){
							$sql.="and genre=:genre ";
							$tableau.="':genre'=>$genre,";
						}
						
						if($couleur!="" || $couleur!=NULL){
							$sql.="and couleur=:couleur ";
							$tableau.="':couleur'=>$couleur,";
						}
						
						if($prix!=0){
							$sql.="and prix between 0 and :prix ";
							$tableau.="':prix'=>$prix, ";
						}
						
						if($surface!="" || $surface!=NULL){
							$sql.="and surface.type=:surface ";
							$tableau.="':surface'=>$surface,";								
						}
								
						if($foulee!="" || $foulee!=NULL){
							$sql.="and foulee.type=:foulee "; 
							$tableau.="':foulee'=>$foulee,";
						}		 
								
						if($marque!="" || $marque!=NULL){
							$sql.="and marque.nom=:marque "; 
							$tableau.="':marque'=>$marque";
						}						
						$sth=$db->prepare($sql);
						$sth->setFetchMode(PDO::FETCH_ASSOC);
						
						if($genre!="" || $genre!=NULL){
							$sth->bindParam(':genre', $genre, PDO::PARAM_STR);
						}
						if($couleur!="" || $couleur!=NULL){
							$sth->bindParam(':couleur', $couleur, PDO::PARAM_STR);
						}
						if($prix!=0){
							$sth->bindParam(':prix', $prix, PDO::PARAM_INT);
						}
						if($surface!="" || $surface!=NULL){
							$sth->bindParam(':surface', $surface, PDO::PARAM_STR);
						}
						if($foulee!="" || $foulee!=NULL){
							$sth->bindParam(':foulee', $foulee, PDO::PARAM_STR);
						}
						if($marque!="" || $marque!=NULL){
							$sth->bindParam(':marque', $marque, PDO::PARAM_STR);
						}
						$sth->execute();
						return $sth->fetchAll();
					}
				
					function affichage($sth){
						echo "<div id='chaussures'>";
						foreach ($sth as $resultat){
							foreach ($resultat as $key=>$val){
								switch($key){
									case "url_image":
										echo "<div id='chaussure'>
												<figure>
													<img src='".$val."' width='100px'/>";
										break;
									case "nom":;
										echo "<figcaption>".$val."<br>";
										break;
									case "modele":
										echo $val."<br>";
										break;
									case "prix":
										echo $val."<br></figcaption>";
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

	<div id="footer">
		<div class="container">
			<p>Created by Yordles</p>
		</div>
	</div>			
  </body>
  <script src="jquery/dist/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
	
	$("div #chaussure").click(function(){
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


