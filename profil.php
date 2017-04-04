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
				<h2>Profil</h2>
				<div id="profil">
					<a href="accueil.php">Accueil</a> > <a href="profil.php">Profil</a>
					</br>
							
					<?php
						session_start();
						foreach ($_SESSION['membre'] as $value){
							foreach($value as $key=>$val){
								switch($key){
									case "civilite":
										echo "<h2>".$val." ";
										break;
									case "nom":
										echo $val." ";
										break;
									case "prenom":
										echo $val."</h2>";
										break;
									case "date_naissance":
										echo "<p>".$val."</p>";
										break;
									case "cp":
										echo "<p>".$val." ";
										break;
									case "ville":
										echo $val."</p>";
										break;
									case "telephone":
										echo "<p>".$val."</p>";
										break;
								}
							}
						}
							
					?>
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