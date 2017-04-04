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

		if(isset($_POST["Ajouter_Chaussure"])){
			$nom=$_POST['nom'];
			$couleur=$_POST['couleur'];
			$prix=$_POST['prix'];
			$surface=$_POST['surface'];
			$foulee=$_POST['foulee'];
			$marque=$_POST['marque'];
			$poids=$_POST['poids'];
			$genre=$_POST['genre'];
			$description=$_POST['description'];
			$url_image=$_POST['url_image'];
			
			PDOConnexion::setParameters("wild","phpsrc","tpphp");
			$db=PDOConnexion::getInstance();
			$sql="INSERT INTO  chaussure(modele, marque, foulee, surface, couleur, prix, poids, genre, description, url_image) VALUES (:nom, :marque, :foulee, :surface, :couleur, :prix, :poids, :genre, :description, :url_image)";
			$sth=$db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute(array(":nom"=>$nom, ":poids"=>$poids, ":genre"=>$genre, ":description"=>$description, ":url_image"=>$url_image,":couleur"=>$couleur,":prix"=>$prix,":surface"=>$surface,":foulee"=>$foulee,":marque"=>$marque));
		}

		if(isset($_POST["Modifier_Chaussure"])){
			$id=$_POST['id'];
			$nom=$_POST['nom'];
			$couleur=$_POST['couleur'];
			$prix=$_POST['prix'];
			$surface=$_POST['surface'];
			$foulee=$_POST['foulee'];
			$marque=$_POST['marque'];
			$poids=$_POST['poids'];
			$genre=$_POST['genre'];
			$description=$_POST['description'];
			$url_image=$_POST['url_image'];
			
			PDOConnexion::setParameters("wild","phpsrc","tpphp");
			$db=PDOConnexion::getInstance();
			$sql="UPDATE chaussure SET 
				modele = :nom,
				marque = :marque,
				foulee = :foulee,
				surface = :surface,
				couleur = :couleur,
				prix = :prix,
				poids = :poids,
				genre = :genre,
				description = :description,
				url_image = :url_image
				WHERE id = :id";
			$sth=$db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute(array(":id"=>$id, ":nom"=>$nom, ":poids"=>$poids, ":genre"=>$genre, ":description"=>$description, ":url_image"=>$url_image,":couleur"=>$couleur,":prix"=>$prix,":surface"=>$surface,":foulee"=>$foulee,":marque"=>$marque));
		}

		if(isset($_POST["Supprimer_Chaussure"])){
			$id=$_POST['id'];
			
			PDOConnexion::setParameters("wild","phpsrc","tpphp");
			$db=PDOConnexion::getInstance();
			$sql="DELETE FROM  chaussure WHERE id = :id";
			$sth=$db->prepare($sql);
			$sth->setFetchMode(PDO::FETCH_ASSOC);
			$sth->execute(array(":id"=>$id));
		}

		function chaussure($id){
            PDOConnexion::setParameters("wild","phpsrc","tpphp");
            $db=PDOConnexion::getInstance();
            $sql="SELECT * FROM chaussure WHERE id = :id";
            $sth=$db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute(array(":id" => $id));
            return $sth->fetch();
        }

		function list_chaussure(){
            PDOConnexion::setParameters("wild","phpsrc","tpphp");
            $db=PDOConnexion::getInstance();
            $sql="SELECT * FROM chaussure";
            $sth=$db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            return $sth->fetchAll();
        }

        function list_foulee(){
            PDOConnexion::setParameters("wild","phpsrc","tpphp");
            $db=PDOConnexion::getInstance();
            $sql="SELECT * FROM foulee";
            $sth=$db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            return $sth->fetchAll();
        }

        function list_surface(){
            PDOConnexion::setParameters("wild","phpsrc","tpphp");
            $db=PDOConnexion::getInstance();
            $sql="SELECT * FROM surface";
            $sth=$db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            return $sth->fetchAll();
        }

        function list_marque(){
            PDOConnexion::setParameters("wild","phpsrc","tpphp");
            $db=PDOConnexion::getInstance();
            $sql="SELECT * FROM marque";
            $sth=$db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute();
            return $sth->fetchAll();
        }

        function nom_marque($id){
            PDOConnexion::setParameters("wild","phpsrc","tpphp");
            $db=PDOConnexion::getInstance();
            $sql="SELECT nom FROM marque WHERE id = :id";
            $sth=$db->prepare($sql);
            $sth->setFetchMode(PDO::FETCH_ASSOC);
            $sth->execute(array(":id" => $id));
            return $sth->fetch();
        }
		
		function affichage_supprimer($sth){
			echo "<div id='chaussures'>";
			foreach ($sth as $val){
				echo "<div>
						<figure>
							<img src='" . $val['url_image'] . "' width='100px'/>
							<figcaption>" . nom_marque($val['marque'])['nom'] . "<br>" . $val['modele'] . "<br>" . $val['prix'] . "<br>
								<form method='POST' action='admin.php'>
									<input type='text' style='display:none' name='id' value='" . $val['id'] . "'/>
									<input type='submit' name='Supprimer_Chaussure' value='Supprimer'/>
								</form>
							</figcaption>
						</figure>
					</div>";
			}
			echo "</div>";
		}

		function affichage_modifier($sth){
			echo "<div id='chaussures'>";
			foreach ($sth as $val){
				echo "<div>
						<figure>
							<img src='" . $val['url_image'] . "' width='100px'/>
							<figcaption>" . nom_marque($val['marque'])['nom'] . "<br>" . $val['modele'] . "<br>" . $val['prix'] . "<br>
								<form method='POST' action='admin.php'>
									<input type='text' style='display:none' name='id' value='" . $val['id'] . "'/>
									<input type='submit' name='Modification_Chaussure' value='Modifier'/>
								</form>
							</figcaption>
						</figure>
					</div>";
			}
			echo "</div>";
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
					<form  action="admin.php" method="POST" onsubmit="return champ_obli()" id="formulaire">
						<div class="form-group row">
							<label for="nom" class="col-sm-2 col-form-label">Nom : </label>
							<div class="col-sm-2 champ">
								<input type="text" class="form-control" id="nom" name="nom" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="marque" class="col-sm-2 col-form-label">Marque : </label>
							<div class="col-sm-2 champ">
								<select class="form-control" id="marque" name="marque" required>
									<?php
										$sth=list_marque();
										foreach($sth as $val){
											echo "<option value='" . $val['id'] . "'>" . $val['nom'] . "</option>";
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="prix" class="col-sm-2 col-form-label">Prix : </label>
							<div class="col-sm-2 champ">
								<input type="number" class="form-control" id="prix" name="prix" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="poids" class="col-sm-2 col-form-label">Poids : </label>
							<div class="col-sm-2 champ">
								<input type="number" class="form-control" id="poids" name="poids" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="sexe" class="col-sm-2 col-form-label">Genre : </label>
							<div class="col-sm-2 champ">
								<select class="form-control" id="genre" name="genre" required>
									<option value="Homme">Homme</option>
									<option value="Femme">Femme</option>
								</select>	
							</div>
						</div>

						<div class="form-group row">
							<label for="surface" class="col-sm-2 col-form-label">Surface : </label>
							<div class="col-sm-2 champ">
								<select class="form-control" id="surface" name="surface" required>
									<?php
										$sth=list_surface();
										foreach($sth as $val){
											echo "<option value='" . $val['id'] . "'>" . $val['type'] . "</option>";
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="couleur" class="col-sm-2 col-form-label">Couleur : </label>
							<div class="col-sm-2 champ">
								<input type="text" class="form-control" id="couleur" name="couleur" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="foulees" class="col-sm-2 col-form-label">Foulées : </label>
							<div class="col-sm-2 champ">
								<select class="form-control" id="foulee" name="foulee" required>
									<?php
										$sth=list_foulee();
										foreach($sth as $val){
											echo "<option value='" . $val['id'] . "'>" . $val['type'] . "</option>";
										}
									?>
								</select>
							</div>
						</div>

						<div class="form-group row">
							<label for="photo" class="col-sm-2 col-form-label">Photos : </label>
							<div class="col-sm-2 champ">
								<input type="text" class="form-control" id="photo" name="url_image" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="description" class="col-sm-2 col-form-label">Description : </label>
							<div class="col-sm-2 champ">
								<input type="text" class="form-control" id="description" name="description" required>
							</div>
						</div>
						
						<button type="submit" class="btn" id="valider" name="Ajouter_Chaussure">Valider</button>
					</form>
				</div>

				<div id="supprimer" class="admin masquer" style="display:none">
					<h3>Supprimer un produit</h3>
					<br/>
					<div class="row">
						<div class="col-lg-12 callout" id="liste">
							<?php
								$sth=list_chaussure();
					            affichage_supprimer($sth);
		                    ?>
		                </div>
		            </div>
				</div>
				<?php
					if(isset($_POST["Modification_Chaussure"])){
						echo "<div id='modification' class='admin'>";
						$id = $_POST['id'];
						$chaussure = chaussure($id);
					} else {
						echo "<div id='modification' class='admin' style='display:none'>";
					}
				?>
				<h3>Modifier un produit</h3>
				<br/>
				<form  action="admin.php" method="POST" onsubmit="return champ_obli()" id="formulaire">
					<div class="form-group row">
						<label for="nom" class="col-sm-2 col-form-label">Nom : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="nom" name="nom" value="<?php echo $chaussure['modele']; ?>" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="marque" class="col-sm-2 col-form-label">Marque : </label>
						<div class="col-sm-2 champ">
							<select class="form-control" id="marque" name="marque" required>
								<?php
			                        $sth=list_marque();
			                        foreach($sth as $val){
			                            if($val['id'] == $chaussure['marque']) {
			                        		echo "<option value='" . $val['id'] . "' selected>" . $val['nom'] . "</option>";
			                        	} else {
			                        		echo "<option value='" . $val['id'] . "'>" . $val['nom'] . "</option>";
			                        	}
			                        }
			                    ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="prix" class="col-sm-2 col-form-label">Prix : </label>
						<div class="col-sm-2 champ">
							<input type="number" class="form-control" id="prix" name="prix" value="<?php echo $chaussure['prix']; ?>" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="poids" class="col-sm-2 col-form-label">Poids : </label>
						<div class="col-sm-2 champ">
							<input type="number" class="form-control" id="poids" name="poids" value="<?php echo $chaussure['poids']; ?>" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="sexe" class="col-sm-2 col-form-label">Genre : </label>
						<div class="col-sm-2 champ">
							<select class="form-control" id="genre" name="genre" value="<?php echo $chaussure['genre']; ?>" required>
								<option value="Homme">Homme</option>
								<option value="Femme">Femme</option>
							</select>	
						</div>
					</div>

					<div class="form-group row">
						<label for="surface" class="col-sm-2 col-form-label">Surface : </label>
						<div class="col-sm-2 champ">
							<select class="form-control" id="surface" name="surface" required>
								<?php
			                        $sth=list_surface();
			                        foreach($sth as $val){
			                        	if($val['id'] == $chaussure['surface']) {
			                        		echo "<option value='" . $val['id'] . "' selected>" . $val['type'] . "</option>";
			                        	} else {
			                        		echo "<option value='" . $val['id'] . "'>" . $val['type'] . "</option>";
			                        	}

			                        }
			                    ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="couleur" class="col-sm-2 col-form-label">Couleur : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="couleur" name="couleur" value="<?php echo $chaussure['couleur']; ?>" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="foulees" class="col-sm-2 col-form-label">Foulées : </label>
						<div class="col-sm-2 champ">
							<select class="form-control" id="foulee" name="foulee" required>
								<?php
			                        $sth=list_foulee();
			                        foreach($sth as $val){
			                        	if($val['id'] == $chaussure['foulee']) {
			                        		echo "<option value='" . $val['id'] . "' selected>" . $val['type'] . "</option>";
			                        	} else {
			                        		echo "<option value='" . $val['id'] . "'>" . $val['type'] . "</option>";
			                        	}
			                        }
			                    ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="photo" class="col-sm-2 col-form-label">Photos : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="photo" name="url_image" value="<?php echo $chaussure['url_image']; ?>" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="description" class="col-sm-2 col-form-label">Description : </label>
						<div class="col-sm-2 champ">
							<input type="text" class="form-control" id="description" name="description" value="<?php echo $chaussure['description']; ?>" required>
						</div>
					</div>
					<input type="text" style="display:none" name="id" value="<?php echo $id; ?>"/>
					<button type="submit" class="btn" id="valider" name="Modifier_Chaussure">Valider</button>
				</form>
			</div>


			<div id="modifier" class="admin masquer" style="display:none">
				<h3>Modifier un produit</h3>
				<br/>
				<div class="row">
					<div class="col-lg-12 callout" id="liste">
						<?php
							$sth=list_chaussure();
				           	affichage_modifier($sth);
		                ?>
		            </div>
		        </div>
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
		document.getElementById('modification').style.display='none';
  		if(document.getElementById(id).style.display=='none'){
  			document.getElementById(id).style.display='block';
  		}
  		else{
  			document.getElementById(id).style.display='none';
  		}
  	}
  </script>
</html>


