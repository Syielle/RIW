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
			<li><a href="#">INSCRIPTION</a></li>
			<li><a href="#">CONNEXION</a></li>
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
					<img src="logo_noir.png" alt="logo">
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
				<a href="accueil.html">Retour</a>
				<div id="criteres">
					<div class="container">
						<div class="row">
					<div class="col-ms-6">
					<h3>Catégories</h3><br/>
					<form>
					<p>Sexe</p> 
					<p onclick="tri_genre('homme')">> Homme</p>
					<p onclick="tri_genre('femme')">> Femme </p>
					<br/>
					<p>taille</p>
					<p>couleur</p><select name="couleur" size="1"><option>Bleu</option>
					<option>Jaune</option>
					<option>Rouge</option>
					</select>
					<br/>
					</br>
					<p>prix</p>
					<input type="range" min="50" max="250" value="0" step="10" oninput="document.getElementById('AfficheRange').textContent=value" />
					<span id="AfficheRange">0</span>
					</div>
					<br>
					<p>surface</p><select name="surface" size="1"><option></option>
					<option></option>
					<option></option>
					</select>
					</br>
					</br>
					<p>foulées</p><select name="foulees" size="1"><option></option>
					<option></option>
					<option></option>
					</select>
					</br>
					</br>
					

					<div class="col-ms-6">
					<h3>Marques</h3>
					<p>Tout</p>
					<p>Asics</p>
					<p>Mizuno</p>
					<p>Adidas</p>
					<p>Nike</p>
					</div>

					<input type="submit" name="valider" value="Valider">
					</form>
				</div>
			</div>
				</div>
			</div>	
			<div class="col-lg-10 callout">
				<h2>Adidas</h2>
				<div id="chaussures">
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
					</div>
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
					</div>
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
					</div>
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
					</div>
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
					</div>
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
					</div>
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
					</div>
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
					</div>
					<div>
					<figure>
  						<img src="chaussure.jpg" alt="chaussure" />
  						<figcaption>Marque <br> Nom chaussure <br> Prix <br></figcaption>
					</figure>
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
</html>


<?php
	require_once("PDOConnexion.php");
	
	function affichage_genre($genre){
		$tab=tri_genre($genre);
		foreach ($tab as $key=>$value){
			if($key=="marque"){
				//a revoir comme marque = 1
				$marque=$value;
			}
			elseif($key=="modele"){
				$modele=$value;
			}
			elseif($key=="prix"){
				$prix=$value;
			}
			elseif($key=="image"){
				$image=$value;
			}
		}
		
		$marque=marque($marque);
		echo $marque;
		
		echo "<div><a href=''><img src=".$image." alt=".$modele."></a><br/>
					<p>".$marque."</p> <br/>
					<p>".$modele."</p> <br/>
					<p>".$prix."</p> <br/></div>";
	}
	
	function marque($marque){
		PDOConnexion::setParameters("wild","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT nom FROM marque where id like :marque";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":marque"=>$marque));
		return $sth->fetch();
	}
	
	function tri_genre($genre){
		PDOConnexion::setParameters("wild","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT * FROM chaussure where genre like :genre";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":genre"=>$genre));
		return $sth->fetchAll();
	}
	
	function tri_marque($marque){
		PDOConnexion::setParameters("wild","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT * FROM chaussure, marque where marque.id=chaussure.marque and marque.nom like :marque";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":marque"=>$marque));
		return $sth->fetchAll();
	}
	
	function tri_couleur($couleur){
		PDOConnexion::setParameters("wild","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT * FROM chaussure where couleur like :couleur";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":couleur"=>$couleur));
		return $sth->fetchAll();
	}
	
	function tri_prix($prix){
		PDOConnexion::setParameters("wild","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT * FROM chaussure where prix like :prix";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":prix"=>$prix));
		return $sth->fetchAll();
	}
	
	function tri_surface($surface){
		PDOConnexion::setParameters("wild","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT * FROM chaussure where surface like :surface";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":surface"=>$surface));
		return $sth->fetchAll();
	}
	
	function tri_foulee($foulee){
		PDOConnexion::setParameters("wild","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT * FROM chaussure where foulee like :foulee";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":foulee"=>$foulee));
		return $sth->fetchAll();
	}
	
	function tri($genre,$couleur,$prix,$surface,$foulee,$marque){
		$tab==array(
			'genre'=>$genre,
			'couleur'=>$couleur,
			'prix'=>$prix,
			'surface'=>$surface,
			'foulee'=>$foulee,
			'marque'=>$marque);
	}
	
	
	
	
	
	
	
	
?>