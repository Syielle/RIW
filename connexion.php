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
		session_start();
		
		if(isset($_POST['connexion'])){
			require_once("PDOConnexion.php");
			$email=$_POST["Email"];
			$mdp=$_POST["Mot_de_passe"];
			//Vérifier les champs obligatoires
			$tab_obli=array($mdp,$email);
			
			foreach($tab_obli as $obli){
				if(!isset($obli)&& empty($obli)){
					echo "<script type=\"text/javascript\">alert('Vous n'avez pas rempli tous les champs');</script>";
				}
			}
			
			function membre($mdp,$email){
				PDOConnexion::setParameters("wild","phpsrc","tpphp");
				$db=PDOConnexion::getInstance();
				/*$sql="SELECT email from membre where email=:email and mdp=:mdp;";*/
				$sql="SELECT * from membre where email=:email and mdp=:mdp;";
				$sth=$db->prepare($sql);
				$sth->setFetchMode(PDO::FETCH_ASSOC);
				$sth->execute(array(":email"=>$email,":mdp"=>$mdp));
				//return $sth->fetch();
				return $sth->fetchAll();
			}
			$_SESSION['membre']=membre($mdp,$email);
			header('Location: profil.php');
			
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
					<img src="logo_noir.png" alt="logo">
				</div>
			</div>
			<div class="col-lg-10 callout">
				<h2>Connexion</h2>
				<div id="connexion">
					<a href="accueil.html">Accueil</a> > <a href="connexion.php">Connexion</a>
						</br>
					</br>
						<div id="desinscription">

							<form  action="" method="POST" onsubmit="return champ_obli()" id="formulaire">

		<div class="form-group row">
			<label for="Email" class="col-sm-2 col-form-label" name="Email">Adresse mail</label>
			<div class="col-sm-2">
				<input type="email" class="form-control" id="Email"  name="Email" onchange="verification_email()" value="<?php if(isset($_POST['Email']) || !empty($_POST['Email'])) echo $_POST['Email']?>">
			</div>

		</div>

		<div class="form-group row">
		<label for="Email" class="col-sm-2 col-form-label">Mot de passe</label>
			<div class="col-sm-2">
				<input type="mot_de_passe" class="form-control"  name="Mot_de_passe" id="mot_de_passe" onchange="verification_motdepasse()" value="<?php if(isset($_POST['Email']) || !empty($_POST['Email'])) echo $_POST['Email']?>">
			</div>
		</div>
		<a href="mdp_oublie.php" style="text-align:right;">Mot de passe oublié ?</a>
		<br/>
		<br/>
		<button type="submit" class="btn" name="connexion">Envoyer</button>
		
	</form>

 
  <script type="text/javascript">
	function champ_obli(){
		var email=document.getElementById('Email').value;
	}
	function verification_email(){
		var val_email= document.getElementById('Email').value;
		var email=document.getElementById('Email');
		var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
		if(val_email==""){
			error(email);
		}
		else if(!regex.test(val_email)){
			error(email);
		}
		else{
			valid(email);
		}
	}

	function verification_motdepasse(){
		var val_mdp=document.getElementById('Mot_de_passe').value;
		var mdp=document.getElementById('Mot_de_passe');
		var regex=/^{8,}/;
		if(val_mdp==""){
			error(mdp);
		}
		else if(!regex.test(val_mdp)){
			error(mdp);
		}
		else{
			valid(mdp);
		}
	}
	
	function valid(element){
		element.setAttribute("class","form-control form-control-success");
		var div=element.parentNode;
		div.setAttribute("class","col-xs-6 has-success");
	}
	
	function error(element){
		element.setAttribute("class","form-control form-control-error");
			var div=element.parentNode;
			div.setAttribute("class","col-xs-6 has-error");
	}
	
  </script>
						
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