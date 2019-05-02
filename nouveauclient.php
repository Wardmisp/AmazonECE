<?php


 	$noma = isset($_POST["nom"])?$_POST["nom"] : ""; 
 	$prenoma = isset($_POST["prenom"])?$_POST["prenom"] : ""; 
 	$adresse = isset($_POST["adresse"])?$_POST["adresse1"] : "";
 	$ville = isset($_POST["ville"])?$_POST["ville"] : "";
 	$CodePostal = isset($_POST["codepostal"])?$_POST["codepostal"] : "";
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

 	
 	$connexion = false;

 	for ($i = 0; $i < count($logs); $i++) {
 	if ($logs[$login] == $pass) {
 	$connexion = true;
 	break;
	}
 	}
	if ($connexion) {
 		echo "Connexion okay.";
 	}
 	else {
 		echo "Connexion refusée.";
 	}



//identifier le nom de base de données
$database = "amazonece";
//connectez-vous dans votre BDD
//Rappel : votre serveur = localhost | votre login = root | votre mot de pass = '' (rien)
$db_handle = mysqli_connect('localhost', 'root', '' );
$db_found = mysqli_select_db($db_handle, $database);

 //si le BDD existe, faire le traitement
if ($db_found) {
 $sql = "SELECT * FROM amazonece";
 $result = mysqli_query($db_handle, $sql);
 while ($data = mysqli_fetch_assoc($result)) {
 echo "ID de l'acheteur:" . $data['IDAcheteur'] . '<br>';
 echo "nomA:" . $data['nomA'] . '<br>';
 echo "prenomA: " . $data['prenomA'] . '<br>';
 echo "Email de l'acheteur: " . $data['mailA'] . '<br>';
 echo "Adresse: " . $data['adresse'] . '<br>';
 echo "Code Postal: " . $data['CodePostal'] . '<br>';
 echo "Pays: " . $data['Pays'] . '<br>';
 echo "Telephone: " . $data['Telephone'] . '<br>';
 }//end while

}//end if
//si le BDD n'existe pas
else {
 echo "Database not found";
}//end else
//fermer la connection
?>