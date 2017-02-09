function champ_obli(){
	var email=document.getElementById('Email').value;
	var mot_de_passe=document.getElementById('Mot_de_passe').value;
	var prenom=document.getElementById('Prenom').value;
	var nom=document.getElementById('Nom').value;
	var sexe=document.getElementById('Sexe').value;
	var date_naissance=document.getElementById('Date_naissance').value;
	var telephone=document.getElementById('Telephone').value;
	var pays=document.getElementById('Pays').value;
	var code_postal=document.getElementById('Code_Postal').value;
	var ville=document.getElementById('Ville').value;
	var adresse=document.getElementById('Adresse').value;
	var tab=new Array(email,mot_de_passe,prenom,nom,sexe,date_naissance,telephone,pays,code_postal,ville,adresse);
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
	
function verification_prenom(){
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