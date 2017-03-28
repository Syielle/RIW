<!DOCTYPE html>
<html lang="fr">
  <head>
	<title>Run in Wild</title>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="style_inscription.css" rel="stylesheet">
	
	<meta charset="utf-8">
  </head>
  <body>
	<?php
		if(isset($_POST['inscription'])){
			require_once("PDOConnexion.php");
			$civilite=$_POST["Civilite"];
			$nom=$_POST["Nom"];
			$prenom=$_POST["Prenom"];
			$mdp=$_POST["Mot_de_passe"];
			$verif=$_POST["Confirmation"];
			$email=$_POST["Email"];
			$jour=$_POST["Jour"];
			$mois=$_POST["Mois"];
			$annee=$_POST["Annee"];
			$pays=$_POST["Pays"];
			$cp=$_POST["Code_Postal"];
			$ville=$_POST["Ville"];
			$adresse=$_POST["Adresse"];
			$comp_ad=$_POST["Complement"];
			$tel=$_POST["Telephone"];
			$date=$annee."-".$mois."-".$jour;
			//Vérifier les champs obligatoires
			$tab_obli=array($civilite,$nom,$prenom,$mdp,$verif,$email,$date,$pays,$cp,$ville,$adresse,$comp_ad,$tel);
			
			foreach($tab_obli as $obli){
				if(!isset($obli)&& empty($obli)){
					echo "<script type=\"text/javascript\">alert('Vous n'avez pas rempli tous les champs');</script>";
				}
			}
			
			function membre($civilite,$nom,$prenom,$mdp,$verif,$email,$date,$pays,$cp,$ville,$adresse,$comp_ad,$tel){
				PDOConnexion::setParameters("wild","phpsrc","tpphp");
				$db=PDOConnexion::getInstance();
				$sql="INSERT INTO membre VALUES (3,:civilite, :nom, :prenom, :mdp, :email, :date, :pays, :cp, :ville, :adresse, :comp_ad, :tel, 0)";
				$sth=$db->prepare($sql);
				$sth->setFetchMode(PDO::FETCH_ASSOC);
				$sth->execute(array(":civilite"=>$civilite,":nom"=>$nom,":prenom"=>$prenom,":mdp"=>$mdp,":email"=>$email,":date"=>$date,":pays"=>$pays,":cp"=>$cp, ":ville"=>$ville, ":adresse"=>$adresse, ":comp_ad"=>$comp_ad, ":tel"=>$tel));
				
			}
			
			membre($civilite,$nom,$prenom,$mdp,$verif,$email,$date,$pays,$cp,$ville,$adresse,$comp_ad,$tel);
			
			
			
		}
	?>
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
			<li><a href="panier.html"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>  PANIER</a></li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<div class="container">
	<!-- Navbar transparente-->
		<div class="navbar navbar-transparente">
			<div class="container-fluid" id="barre_nav">
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="navbar navbar-logo">
						<!-- Logo -->
						<ul class="nav navbar-nav">
							<img src="logo_noir.png" alt="Logo" width="100px" height="auto">
						</ul>
						<p><a href="accueil.html">Accueil</a> > Inscription</p>
					</div>
					<div id="titre">
						<h1>Inscription</h1>
						<h2>Déjà un compte ? <a src="connexion.php">Connexion</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<form  action="" method="POST" onsubmit="return champ_obli()" id="formulaire">
		<div class="form-group row">
			<div class="form-check form-check-inline">
			  <label for="Civilite" class="col-sm-1 col-form-label">Civilité : </label>
			    <div id="champ2">
				  <label class="form-check-label">
					<input class="form-check-input" type="radio" name="Civilite" id="M" value="M" checked> M.
				  </label>
				   <label class="form-check-label">
					<input class="form-check-input" type="radio" name="Civilite" id="Mme" value="Mme"> Mme.
				  </label>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="Nom" class="col-sm-1 col-form-label">Nom : </label>
			<div class="col-sm-2 champ">
				<input type="text" class="form-control" id="Nom" name="Nom" onchange="verification_nom()" value="<?php if(isset($_POST['Nom']) || !empty($_POST['Nom'])) echo $_POST['Nom']?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="Prenom" class="col-sm-1 col-form-label">Prénom : </label>
			<div class="col-sm-2 champ">
				<input type="text" class="form-control" id="Prenom" name="Prenom" onchange="verification_prenom()" value="<?php if(isset($_POST['Prenom']) || !empty($_POST['Prenom'])) echo $_POST['Prenom']?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="Mot_de_passe" class="col-sm-2 col-form-label">Mot de passe : </label>
			<div class="col-sm-2 champ">
				<input type="password" class="form-control" id="Mot_de_passe" name="Mot_de_passe" onchange="verification_motdepasse()" value="<?php if(isset($_POST['Mot_de_passe']) || !empty($_POST['Mot_de_passe'])) echo $_POST['Mot_de_passe']?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="Confirmation" class="col-sm-2 col-form-label">Vérification du mot de passe : </label>
			<div class="col-sm-2 champ">
				<input type="password" class="form-control" id="Confirmation" name="Confirmation" onchange="verification_confirmation()" value="<?php if(isset($_POST['Confirmation']) || !empty($_POST['Confirmation'])) echo $_POST['Confirmation']?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="Email" class="col-sm-2 col-form-label">Adresse mail : </label>
			<div class="col-sm-2 champ">
				<input type="email" class="form-control" id="Email" name="Email" onchange="verification_email()" value="<?php if(isset($_POST['Email']) || !empty($_POST['Email'])) echo $_POST['Email']?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="Date" class="col-sm-2 col-form-label">Date de naissance : </label>
			<div>
				<div class="col-sm-2" id="champ">
					<select class="form-control" name="Jour">
						<?php
							$jour=01;
							for ($jour=01;$jour<=31;$jour++){
								echo "<option value='".$jour."'>".$jour."</option>";
							}
						?>
					</select>
				</div>
				<div class="col-sm-2" id="champ">
					<select class="form-control" name="Mois">
						<?php
							$mois=01;
							for ($mois=01;$mois<=12;$mois++){
								echo "<option value='".$mois."'>".$mois."</option>";
							}
						?>
					</select>
				</div>
				<div class="col-sm-2" id="champ">
					<select class="form-control" name="Annee">
						<?php
							$annee=1910;
							for ($annee=1910;$annee<=2017;$annee++){
								echo "<option value='".$annee."'>".$annee."</option>";
							}
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="Pays" class="col-sm-1 col-form-label">Pays:</label>
			<div class="col-sm-2 champ">
				<select class="form-control" name="Pays">
					<option value="France" selected="France">France</option>
					<option value="Allemagne">Allemagne</option>
					<option value="Autriche">Autriche</option>
					<option value="Belgique">Belgique</option>
					<option value="Bulgarie">Bulgarie</option>
					<option value="Chypre">Chypre</option>
					<option value="Croatie">Croatie</option>
					<option value="Danemark">Danemark</option>
					<option value="Espagne">Espagne</option>
					<option value="Estonie">Estonie</option>
					<option value="Finlande">Finlande</option>
					<option value="France">France</option>
					<option value="Grèce">Grèce</option>
					<option value="Hongrie">Hongrie</option>
					<option value="Irlande">Irlande</option>
					<option value="Italie">Italie</option>
					<option value="Lettonie">Lettonie</option>
					<option value="Lituanie">Lituanie</option>
					<option value="Luxembourg">Luxembourg</option>
					<option value="Malte">Malte</option>
					<option value="Pays-Bas">Pays-Bas</option>
					<option value="Pologne">Pologne</option>
					<option value="Portugal">Portugal</option>
					<option value="République_tchèque">République tchèque</option>
					<option value="Roumanie">Roumanie</option>
					<option value="Royaume-Uni">Royaume-Uni</option>
					<option value="Slovaquie">Slovaquie</option>
					<option value="Slovénie">Slovénie</option>
					<option value="Suède">Suède</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="Code_Postal" class="col-sm-1 col-form-label">Code Postal:</label>
			<div class="col-sm-2 champ">
				<input type="text" class="form-control" id="Code_Postal" name="Code_Postal" onkeyup="recherche()" onchange="verification_codepostal()" value="<?php if(isset($_POST['Code_Postal']) || !empty($_POST['Code_Postal'])) echo $_POST['Code_Postal']?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="Ville" class="col-sm-1 col-form-label">Ville:</label>
			<div class="col-sm-2 champ">
				<input type="text" class="form-control" id="Ville" name="Ville">
			</div>
		</div>
		<div class="form-group row">
			<label for="Adresse" class="col-sm-1 col-form-label">Adresse:</label>
			<div class="col-sm-2 champ">
				<input type="text" class="form-control" id="Adresse" name="Adresse">
			</div>
		</div>
		<div class="form-group row">
			<label for="Adresse" class="col-sm-1 col-form-label">Complément d'adresse:</label>
			<div class="col-sm-2 champ">
				<input type="text" class="form-control" id="Complement" name="Complement">
			</div>
		</div>
		<div class="form-group row">
			<label for="telephone" class="col-sm-1 col-form-label">Téléphone:</label>
			<div class="col-sm-2 champ">
				<input type="text" class="form-control" id="Telephone" name="Telephone" onchange="verification_telephone()" value="<?php if(isset($_POST['Telephone']) || !empty($_POST['Telephone'])) echo $_POST['Telephone']?>">
			</div>
		</div>
		<button type="submit" class="btn" id="inscription" name="inscription">Inscription</button>
	</form>
  </body>
  <script src="jquery/dist/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!--Code Postal-->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" ></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
  
  <script type="text/javascript">
	function champ_obli(){
		var nom=document.getElementById('Nom').value;
		var prenom=document.getElementById('Prenom').value;
		var mot_de_passe=document.getElementById('Mot_de_passe').value;
		var confirmation=document.getElementById('Confirmation').value;
		var email=document.getElementById('Email').value;
		var code_postal=document.getElementById('Code_Postal').value;
		var ville=document.getElementById('Ville').value;
		var adresse=document.getElementById('Adresse').value;
		var complement=document.getElementById('Complement').value;
		var telephone=document.getElementById('Telephone').value;
		var error = document.getElementsByClassName("form-control-error");
		var tab=new Array(nom,prenom,mot_de_passe,confirmation,email,code_postal,ville,adresse,complement,telephone);
		var l=tab.length;
			for(i=0;i<tab.length;i++){
				if(tab[i]==null || tab[i]==""){
					alert("Tous les champs du formulaire n'ont pas été remplis");
					return false;
				}
				/*else if(error!=null || error!=""){
					alert("Un ou plusieurs champs sont mal renseignés");
					return false;
				}*/
			}
		
		return true;
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
		if(val_mdp.length>=8){
			valid(mdp);
		}
		else{
			error(mdp);
		}
	}
	
	function verification_confirmation(){
		var val_mdp=document.getElementById('Mot_de_passe').value;
		var val_conf=document.getElementById('Confirmation').value;
		var conf=document.getElementById('Confirmation');
		console.log(val_mdp);
		console.log(val_conf);
		if(val_mdp==val_conf){
			valid(conf);
		}
		else{
			error(conf);
		}
	}
		
	function verification_prenom(){
		console.log("Prenom");
		var val_prenom = document.getElementById('Prenom').value;
		var prenom=document.getElementById('Prenom');
		if(val_prenom==""){
			error(prenom);
		}
		else{
			valid(prenom);
		}
	}
		
	function verification_nom(){
		var val_nom = document.getElementById('Nom').value;
		var nom=document.getElementById('Nom');
		if(val_nom==""){
			error(nom);
		}
		else{
			valid(nom);
		}
	}

	function verification_datenaiss(){
		var val_naiss = document.getElementById('Date_naissance').value;
		var naiss=document.getElementById('Date_naissance');
		var regex =/^[0-9./]{6,10}/;
		if(val_naiss==""){
			error(naiss);
		}
		else if(!regex.test(val_naiss)){
			error(naiss);
		}
		else{
			valid(naiss);
		}
	}

	function verification_telephone(){
		var val_telephone = document.getElementById('Telephone').value;
		var telephone=document.getElementById('Telephone');
		var regex =/^[0-9.-]{10,15}/;
		if(val_telephone==""){
			error(telephone);
		}
		else if(!regex.test(val_telephone)){
			error(telephone);
		}
		else{
			valid(telephone);
		}
	}

	function verification_codepostal(){
		var val_cp = document.getElementById('Code_Postal').value;
		var cp=document.getElementById('Code_Postal');
		var regex =/^[0-9]{4,5}/;
		if(val_cp==""){
			error(cp);
		}
		else if(!regex.test(val_cp)){
			error(cp);
		}
		else{
			valid(cp);
		}
	}

	/*Voir si on le fait en ajax*/
	function verification_ville(){
		var val_ville = document.getElementById('Ville').value;
		var ville=document.getElementById('Ville');
		var regex =/^[a-zA-Z-]{5}/;
		if(val_ville==""){
			error(ville);
		}
		else if(!regex.test(val_ville)){
			error(ville);
		}
		else{
			valid(ville);
		}
	}
	
	var marker=null;
	function recherche(){			
		$("#Code_Postal").autocomplete({
			source: function(request, response){	
				//On arrive ici dès qu'une touche est tapée dans #codepostal	

				//récupère la valeur du code postal
				var cp=$('#Code_Postal').val();
				//vérification des 5 chiffres
				if(!((cp/10000)>=1)){ //code postal erroné
					if(marker!=null)marker.setMap(null);
					//zone de texte
					$('#Ville').val("");
					response();
				}
				else{
					$.getJSON(
						//interrogation du webservice geonames
						"http://api.geonames.org/postalCodeLookupJSON",
						{
							postalcode:cp,
							country:"FR",
							username:"iutmmistlo"
						},
						function(data){
							var res=new Array();
							var i=0;
							//parcourt les données récupérées postalcodes
							for(i=0;i<data.postalcodes.length;i++){
								var place=data.postalcodes[i].placeName;
								var code=data.postalcodes[i].postalCode;
							res[res.length]={"value":code,"label":place};
							}
							response(res);
						}
					);
				}
			},
			//création du select avec les villes qui corresondent au code postal
			select : function(event, ui){
				event.preventDefault();
				$(this).val(ui.item.value);
				$('#Ville').val(item.value);
				/*afficheInfo($(this).val(),ui.item.label);		*/						
			}
		});
	};
	
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
</html>