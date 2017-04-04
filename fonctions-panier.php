<?php

	/**
	 * Verifie si le panier existe, le créé sinon
	 * @return booleen
	 */
	function creationPanier(){
	   if (!isset($_SESSION['panier'])){
		  $_SESSION['panier']=array();
		  $_SESSION['panier']['modele'] = array();
		  $_SESSION['panier']['marque'] = array();
		  $_SESSION['panier']['quantite'] = array();
		  $_SESSION['panier']['prix'] = array();
		  $_SESSION['panier']['taille'] = array();
		  $_SESSION['panier']['verrou'] = false;
	   }
	   return true;
	}


	/**
	 * Ajoute un article dans le panier
	 * @param string $modele
	 * @param string $marque
	 * @param int $quantite
	 * @param int $taille
	 * @param float $prix
	 * @return void
	 */
	function ajouterArticle($modele,$marque,$quantite,$taille,$prix){

	   //Si le panier existe
	   if (creationPanier() && !isVerrouille())
	   {
			// on ajoute le produit
			 array_push( $_SESSION['panier']['modele'],$modele);
			 array_push( $_SESSION['panier']['marque'],$marque);
			 array_push( $_SESSION['panier']['taille'],$taille);
			 array_push( $_SESSION['panier']['prix'],$prix);
		  }
	   else
	   echo "Un problème est survenu veuillez réessayer";
	}


	/**
	 * Supprime un article du panier
	 * @param $modele
	 * @return unknown_type
	 */
	function supprimerArticle($modele){
	   //Si le panier existe
	   if (creationPanier() && !isVerrouille())
	   {
		  //Nous allons passer par un panier temporaire
		  $tmp=array();
		  $tmp['modele'] = array();
		  $tmp['marque'] = array();
		  $tmp['quantite'] = array();
		  $tmp['taille'] = array();
		  $tmp['prix'] = array();
		  $tmp['verrou'] = $_SESSION['panier']['verrou'];

		  for($i = 0; $i < count($_SESSION['panier']['modele']); $i++)
		  {
			 if ($_SESSION['panier']['modele'][$i] !== $modele)
			 {
				array_push( $tmp['modele'],$_SESSION['panier']['modele'][$i]);
				array_push( $tmp['marque'],$_SESSION['panier']['marque'][$i]);
				array_push( $tmp['taille'],$_SESSION['panier']['taille'][$i]);
				array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
			 }

		  }
		  //On remplace le panier en session par notre panier temporaire à jour
		  $_SESSION['panier'] =  $tmp;
		  //On efface notre panier temporaire
		  unset($tmp);
	   }
	   else
	   echo "Un problème est survenu veuillez réessayer";
}


/**
 * Montant total du panier
 * @return int
 */
function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['modele']); $i++)
   {
      $total += $_SESSION['panier']['modele'][$i] * $_SESSION['panier']['prix'][$i];
   }
   return $total;
}


/**
 * Fonction de suppression du panier
 * @return void
 */
function supprimePanier(){
   unset($_SESSION['panier']);
}

/**
 * Permet de savoir si le panier est verrouillé
 * @return booleen
 */
function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
}

/**
 * Compte le nombre d'articles différents dans le panier
 * @return int
 */
function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['modele']);
   else
   return 0;

}

?> 