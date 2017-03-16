<!DOCTYPE html>
<html lang="fr">
  <head>
	<title>Run in Wild</title>
	
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<meta charset="utf-8">
  </head>
  <body>
	<form  action="" method="POST" onsubmit="return champ_obli()">
		<h1>Inscription</h1>
		<div class="form-group row">
			<label for="prenom" class="col-sm-1 col-form-label">Prénom:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="prenom" placeholder="prenom" onchange="verification_prenom()" value="<?php if(isset($_POST['Prenom']) || !empty($_POST['Prenom'])) echo $_POST['Prenom']?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="nom"  class="col-sm-1 col-form-label">Nom:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label for="mail" class="col-sm-2 col-form-label">Adresse mail:</label>
			<div class="col-sm-5">
				<input type="email" class="form-control" >
			</div>
		</div>
		<div class="form-group row">
			<label for="mdp" class="col-sm-1 col-form-label">Mot de passe:</label>
			<div class="col-sm-5">
				<input type="password" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label for="date" class="col-sm-3 col-form-label">Date de naissance:</label>
			<div class="col-sm-5">
				<input type="date" class="form-control">
			</div>
		</div>
		<div class="form-check form-check-inline">
		  <label class="form-check-label">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Homme
		  </label>
		   <label class="form-check-label">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Femme
		  </label>
		</div>
		<div class="form-group row">
			<label for="sexe" class="col-sm-1 col-form-label">Pays:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control">
			</div>
			<label for="sexe" class="col-sm-1 col-form-label">Code Postal:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control">
			</div>
			<label for="sexe" class="col-sm-1 col-form-label">Ville:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control">
			</div>
			<label for="sexe" class="col-sm-1 col-form-label">Adresse:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label for="telephone" class="col-sm-2 col-form-label">Téléphone:</label>
			<div class="col-sm-5">
				<input type="text" class="form-control">
			</div>
		</div>
		<button type="submit" class="btn">Envoyer</button>
	</form>
  </body>
  <script src="jquery/dist/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="formulaire.js"></script>
</html>