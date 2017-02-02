<?php
	if(isset($_POST['contactez'])){
		require_once("PDOConnexion.php");
		$email=$_POST["Email"];
		$mdp=$_POST["Mot_de_passe"];
		
		var tab_infos=recup_info();
		foreach (tab_infos as $key=>$value){
			if ($key="admin" && $value==1){
				//alors l'utilisateur est admin
				//renvoyer à une certaine page
			}
			else{
				//l'utilisateur est un client
				//renvoyer à une certaine page
			}
		}
	}
	
	function recup_info(email,mdp){
		PDOConnexion::setParameters("yordle","phpsrc","tpphp");
		$db=PDOConnexion::getInstance();
		$sql="SELECT * FROM membre where email like :email and mdp like :mdp";
		$sth=$db->prepare($sql);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array(":email"=>$email,":mdp"=>$mdp));
		return $sth->fetchAll();
	}
?>