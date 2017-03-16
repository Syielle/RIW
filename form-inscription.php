<?php
	if(isset($_POST['contactez'])){
		require_once("PDOConnexion.php");
		$civilite=$_POST["Civilite"];
		$nom=$_POST["Nom"];
		$prenom=$_POST["Prenom"];
		$mdp=$_POST["Mot_de_passe"];
		$confirmation=$_POST["Confirmation"];
		$email=$_POST["Email"];
		$jour=$_POST["Jour"];
		$mois=$_POST["Mois"];
		$annee=$_POST["Annee"];
		$mdp=$_POST["Mot_de_passe"];
		$pays=$_POST["Pays"];
		$cp=$_POST["Code_Postal"];
		$ville=$_POST["Ville"];
		$adresse=$_POST["Adresse"];
		$complement=$_POST["Complement"];
		$tel=$_POST["Telephone"];
		
		echo $pays;
		echo $jour;
		
		
		/*var tab_infos=recup_info();
		foreach (tab_infos as $key=>$value){
			if ($key="admin" && $value==1){
				//alors l'utilisateur est admin
				//renvoyer à une certaine page
			}
			else{
				//l'utilisateur est un client
				//renvoyer à une certaine page
			}
		}*/
	}
	
	$civilite=$_POST["Civilite"];
		$nom=$_POST["Nom"];
		$prenom=$_POST["Prenom"];
		$mdp=$_POST["Mot_de_passe"];
		$confirmation=$_POST["Confirmation"];
		$email=$_POST["Email"];
		$jour=$_POST["Jour"];
		$mois=$_POST["Mois"];
		$annee=$_POST["Annee"];
		$mdp=$_POST["Mot_de_passe"];
		$pays=$_POST["Pays"];
		$cp=$_POST["Code_Postal"];
		$ville=$_POST["Ville"];
		$adresse=$_POST["Adresse"];
		$complement=$_POST["Complement"];
		$tel=$_POST["Telephone"];
		
	function recup_info($email,$mdp){
		PDOConnexion::setParameters("yordle","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT * FROM membre where email like :email and mdp like :mdp";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":email"=>$email,":mdp"=>$mdp));
		return $sth->fetchAll();
	}
?>