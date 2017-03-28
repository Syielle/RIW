<!DOCTYPE html>
<html lang="fr">
  <head>
	<title>Run in Wild</title>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">

	<meta charset="utf-8">
  </head>
  <body>
	<?php
		require_once("PDOConnexion.php");
		if(isset($_POST["Valider"])){
			$taille=$_POST['taille'];
			$couleur=$_POST['couleur'];
			$prix=$_POST['prix'];
			$surface=$_POST['surface'];
			$foulee=$_POST['foulee'];
			$marque=$_POST['marque'];
			
			PDOConnexion::setParameters("wild","phpsrc","tpphp");
			$db=PDOConnexion::getInstance();
			$sql="SELECT * FROM chaussure, marque where taille=:taille and couleur=:couleur and prix=:prix and surface=:surface and foulee=:foulee and marque.nom like :marque and marque.id=chaussure.marque";
			$sth=$db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute(array(":taille"=>$taille,":couleur"=>$couleur,":prix"=>$prix,":surface"=>$surface,":foulee"=>$foulee,":marque"=>$marque));
			$sth->fetchAll();
			affichage($sth);
		}
		
		function affichage($resultats){
			foreach ($resultats as $key=>$resultat){
				switch($key){
					case "url_image":
						echo "<div>
								<figure>
									<img src='".$resultat."'/>";
						break;
					case "marque":
						$marque=marque($resultat);
						echo "<figcaption>".$marque."<br>";
						break;
					case "nom":
						echo $resultat."<br>";
						break;
					case "prix":
						echo $resultat."<br></figcaption></figure></div>";
						break; 
				}
			}
		}
		
		
		
	?>
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
			<li><a href="panier.html"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>  PANIER</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-2 callout">
				<div id="logo">
					<a href="accueil.html"><img src="logo_noir.png" alt="Logo" width="100px" height="auto"></a>
				</div>
			</div>
			<div class="col-lg-10 callout">
				<h2>Espace administrateur</h2>
			</div>
		</div>
	</div>				


	<div class="container">
		<div class="row">
			<div class="col-lg-2">
				<div id="boutons">
				Produits<br/>
				<input type="button" value="Ajouter" onclick="masquer_div('ajouter');"/><br/>
				<input type="button" value="Supprimer" onclick="masquer_div('supprimer');"/><br/>
				<input type="button" value="Modifier" onclick="masquer_div('modifier');"/><br/>
				<br/>
				Promotion<br/>
				<input type="button" value="Ajouter" onclick="masquer_div('ajouterP');"/><br/>
				<input type="button" value="Supprimer" onclick="masquer_div('supprimerP');"/><br/>
				<input type="button" value="Modifier" onclick="masquer_div('modifierP');"/><br/>
				<br/>
				Commandes<br/>
				<input type="button" value="En cours" onclick="masquer_div('cours');"/><br/>
				<input type="button" value="Historique" onclick="masquer_div('historique');"/><br/>
				<br/>
				<input type="button" value="Liste inscrits" onclick="masquer_div('liste');"/><br/>
				</div>
			</div>
			<div class="col-lg-10">
				<div id="ajouter" class="admin masquer" style="display:none">
					<h3>Ajouter un produit</h3>
					<br/>
					<form  action="" method="POST" onsubmit="return champ_obli()" id="formulaire">
					
					<div class="form-group row">
						<label for="num_produit" class="col-sm-2 col-form-label">Numéro : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="num_produit" name="Num">
						</div>
					</div>

					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label">Nom : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="nom" name="nom">
						</div>
					</div>

					<div class="form-group row">
						<label for="marque" class="col-sm-2 col-form-label">Marque : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="marque" name="marque">
						</div>
					</div>

					<div class="form-group row">
						<label for="prix" class="col-sm-2 col-form-label">Prix : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="prix" name="prix">
						</div>
					</div>

					<div class="form-group row">
						<label for="sexe" class="col-sm-2 col-form-label">Sexe : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="sexe" name="sexe">
						</div>
					</div>

					<div class="form-group row">
						<label for="surface" class="col-sm-2 col-form-label">Surface : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="surface" name="surface">
						</div>
					</div>

					<div class="form-group row">
						<label for="couleur" class="col-sm-2 col-form-label">Couleur : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="couleur" name="couleur">
						</div>
					</div>

					<div class="form-group row">
						<label for="foulees" class="col-sm-2 col-form-label">Foulées : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="foulees" name="foulees">
						</div>
					</div>

					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photos : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="photo" name="photo">
						</div>
					</div>

					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="description" name="description">
						</div>
					</div>
					
					<button type="submit" class="btn" id="valider" name="inscription">Valider</button>
					</form>
				</div>

<div id="supprimer" class="admin masquer" style="display:none">
					<h3>Supprimer un produit</h3>
					<br/>
					<form  action="" method="POST" onsubmit="return champ_obli()" id="formulaire">
					
					<div class="form-group row">
						<label for="num_produit" class="col-sm-2 col-form-label">Numéro : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="num_produit" name="Num">
						</div>
					</div>

					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label">Nom : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="nom" name="nom">
						</div>
					</div>

					<div class="form-group row">
						<label for="marque" class="col-sm-2 col-form-label">Marque : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="marque" name="marque">
						</div>
					</div>

					<div class="form-group row">
						<label for="prix" class="col-sm-2 col-form-label">Prix : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="prix" name="prix">
						</div>
					</div>

					<div class="form-group row">
						<label for="sexe" class="col-sm-2 col-form-label">Sexe : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="sexe" name="sexe">
						</div>
					</div>

					<div class="form-group row">
						<label for="surface" class="col-sm-2 col-form-label">Surface : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="surface" name="surface">
						</div>
					</div>

					<div class="form-group row">
						<label for="couleur" class="col-sm-2 col-form-label">Couleur : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="couleur" name="couleur">
						</div>
					</div>

					<div class="form-group row">
						<label for="foulees" class="col-sm-2 col-form-label">Foulées : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="foulees" name="foulees">
						</div>
					</div>

					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photos : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="photo" name="photo">
						</div>
					</div>

					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="description" name="description">
						</div>
					</div>
					
					<button type="submit" class="btn" id="valider" name="inscription">Valider</button>
					</form>
				</div>


<div id="modifier" class="admin masquer" style="display:none">
					<h3>Modifier un produit</h3>
					<br/>
					<form  action="" method="POST" onsubmit="return champ_obli()" id="formulaire">
					
					<div class="form-group row">
						<label for="num_produit" class="col-sm-2 col-form-label">Numéro : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="num_produit" name="Num">
						</div>
					</div>

					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label">Nom : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="nom" name="nom">
						</div>
					</div>

					<div class="form-group row">
						<label for="marque" class="col-sm-2 col-form-label">Marque : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="marque" name="marque">
						</div>
					</div>

					<div class="form-group row">
						<label for="prix" class="col-sm-2 col-form-label">Prix : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="prix" name="prix">
						</div>
					</div>

					<div class="form-group row">
						<label for="sexe" class="col-sm-2 col-form-label">Sexe : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="sexe" name="sexe">
						</div>
					</div>

					<div class="form-group row">
						<label for="surface" class="col-sm-2 col-form-label">Surface : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="surface" name="surface">
						</div>
					</div>

					<div class="form-group row">
						<label for="couleur" class="col-sm-2 col-form-label">Couleur : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="couleur" name="couleur">
						</div>
					</div>

					<div class="form-group row">
						<label for="foulees" class="col-sm-2 col-form-label">Foulées : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="foulees" name="foulees">
						</div>
					</div>

					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photos : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="photo" name="photo">
						</div>
					</div>

					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="description" name="description">
						</div>
					</div>
					
					<button type="submit" class="btn" id="valider" name="inscription">Valider</button>
					</form>
				</div>


<div id="ajouterP" class="admin masquer" style="display:none">
					<h3>Ajouter une promotion</h3>
					<br/>
					<form  action="" method="POST" onsubmit="return champ_obli()" id="formulaire">
					
					<div class="form-group row">
						<label for="num_produit" class="col-sm-2 col-form-label">Numéro : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="num_produit" name="Num">
						</div>
					</div>

					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label">Nom : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="nom" name="nom">
						</div>
					</div>

					<div class="form-group row">
						<label for="marque" class="col-sm-2 col-form-label">Marque : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="marque" name="marque">
						</div>
					</div>

					<div class="form-group row">
						<label for="prix" class="col-sm-2 col-form-label">Prix : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="prix" name="prix">
						</div>
					</div>

					<div class="form-group row">
						<label for="sexe" class="col-sm-2 col-form-label">Sexe : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="sexe" name="sexe">
						</div>
					</div>

					<div class="form-group row">
						<label for="surface" class="col-sm-2 col-form-label">Surface : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="surface" name="surface">
						</div>
					</div>

					<div class="form-group row">
						<label for="couleur" class="col-sm-2 col-form-label">Couleur : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="couleur" name="couleur">
						</div>
					</div>

					<div class="form-group row">
						<label for="foulees" class="col-sm-2 col-form-label">Foulées : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="foulees" name="foulees">
						</div>
					</div>

					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photos : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="photo" name="photo">
						</div>
					</div>

					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="description" name="description">
						</div>
					</div>
					
					<button type="submit" class="btn" id="valider" name="inscription">Valider</button>
					</form>
				</div>


<div id="supprimerP" class="admin masquer" style="display:none">
					<h3>Supprimer une promotion</h3>
					<br/>
					<form  action="" method="POST" onsubmit="return champ_obli()" id="formulaire">
					
					<div class="form-group row">
						<label for="num_produit" class="col-sm-2 col-form-label">Numéro : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="num_produit" name="Num">
						</div>
					</div>

					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label">Nom : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="nom" name="nom">
						</div>
					</div>

					<div class="form-group row">
						<label for="marque" class="col-sm-2 col-form-label">Marque : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="marque" name="marque">
						</div>
					</div>

					<div class="form-group row">
						<label for="prix" class="col-sm-2 col-form-label">Prix : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="prix" name="prix">
						</div>
					</div>

					<div class="form-group row">
						<label for="sexe" class="col-sm-2 col-form-label">Sexe : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="sexe" name="sexe">
						</div>
					</div>

					<div class="form-group row">
						<label for="surface" class="col-sm-2 col-form-label">Surface : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="surface" name="surface">
						</div>
					</div>

					<div class="form-group row">
						<label for="couleur" class="col-sm-2 col-form-label">Couleur : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="couleur" name="couleur">
						</div>
					</div>

					<div class="form-group row">
						<label for="foulees" class="col-sm-2 col-form-label">Foulées : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="foulees" name="foulees">
						</div>
					</div>

					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photos : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="photo" name="photo">
						</div>
					</div>

					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="description" name="description">
						</div>
					</div>
					
					<button type="submit" class="btn" id="valider" name="inscription">Valider</button>
					</form>
				</div>




<div id="modifierP" class="admin masquer" style="display:none">
					<h3>Modifier une promotion</h3>
					<br/>
					<form  action="" method="POST" onsubmit="return champ_obli()" id="formulaire">
					
					<div class="form-group row">
						<label for="num_produit" class="col-sm-2 col-form-label">Numéro : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="num_produit" name="Num">
						</div>
					</div>

					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label">Nom : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="nom" name="nom">
						</div>
					</div>

					<div class="form-group row">
						<label for="marque" class="col-sm-2 col-form-label">Marque : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="marque" name="marque">
						</div>
					</div>

					<div class="form-group row">
						<label for="prix" class="col-sm-2 col-form-label">Prix : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="prix" name="prix">
						</div>
					</div>

					<div class="form-group row">
						<label for="sexe" class="col-sm-2 col-form-label">Sexe : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="sexe" name="sexe">
						</div>
					</div>

					<div class="form-group row">
						<label for="surface" class="col-sm-2 col-form-label">Surface : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="surface" name="surface">
						</div>
					</div>

					<div class="form-group row">
						<label for="couleur" class="col-sm-2 col-form-label">Couleur : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="couleur" name="couleur">
						</div>
					</div>

					<div class="form-group row">
						<label for="foulees" class="col-sm-2 col-form-label">Foulées : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="foulees" name="foulees">
						</div>
					</div>

					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photos : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="photo" name="photo">
						</div>
					</div>

					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="description" name="description">
						</div>
					</div>
					
					<button type="submit" class="btn" id="valider" name="inscription">Valider</button>
					</form>
				</div>



<div id="cours" class="admin masquer" style="display:none">
					<h3>Commandes en cours</h3>
					<br/>
					<div>
					</div>
</div>					




<div id="historique" class="admin masquer" style="display:none">
				<h3>Historique des commandes</h3>
					<br/>
				<div>
				</div>
</div>		


<div id="liste" class="admin masquer" style="display:none">
				<h3>Liste des inscrits</h3>
					<br/>
				<div>
				</div>
</div>		


					



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
  	function masquer_div(id){
  		var divs = document.querySelectorAll(".masquer");
		divs.forEach(function(div){
    	div.style.display='none';
		})
  		if(document.getElementById(id).style.display=='none'){
  			document.getElementById(id).style.display='block';
  		}
  		else{
  			document.getElementById(id).style.display='none';
  		}
  	}
  </script>
</html>


