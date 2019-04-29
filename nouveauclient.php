<?php
 	$nom = isset($_POST["nom"])?$_POST["nom"] : ""; 
 	$prenom = isset($_POST["prenom"])?$_POST["prenom"] : ""; 
 	$adresse1 = isset($_POST["adresse1"])?$_POST["adresse1"] : "";
 	$adresse2 = isset($_POST["adresse"])?$_POST["adresse2"] : "";
 	$ville = isset($_POST["ville"])?$_POST["ville"] : "";
 	$codepostal = isset($_POST["codepostal"])?$_POST["codepostal"] : "";
 	$pays = isset($_POST["pays"])?$_POST["pays"] : "";
 	$telephone = isset($_POST["telephone"])?$_POST["telephone"] : "";

	$erreur = "";
 	if($nom == "") {$erreur .= "Le champ Nom est vide. <br>";}
	 if($prenom == "") {$erreur .= " Le champ Prenom est vide. <br>";}
 	if($adresse1 == "") {$erreur .= "Le champ Adresse est vide. <br>";}
 	if($ville == "") {$erreur .= "Le champ Ville est vide. <br>";}
 	if($codepostal == "") {$erreur .= "Le champ Code Postal est vide. <br>";}
 	if($pays == "") {$erreur .= "Le champ Pays est vide. <br>";}
 	if($telephone == "") {$erreur .= "Le champ Téléphone est vide. <br>";}
 	
 	
 	if ($erreur == "") {
 	echo "Formulaire valide";
 	}
 	else {
 	echo "Erreur : $erreur";
 	}
?>
