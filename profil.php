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
				<h2>Profil</h2>
				<div id="profil">
					<a href="accueil.html">Accueil</a> > <a href="profil.php">Profil</a>
						</br>
					
						
							<h2>Civilité Nom Prénom</h2>
							<p>Date de naissance</p>
							<p>Adresse</p>
							<p>Ville Pays</p>
							<p>Code postal</p>
							<p>Numéro de téléphone</p>
							
						
		
 
						
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