<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
 		<title>Ceci est une page de test</title>
	</head>


	<body>

		<?php 
		//recuperation de la BDD et test
		try
		{
			$bdd = new PDO('mysql:host=localhost;dbname=amazonece;charset=utf8', 'root', '');
		}
		catch (Exception $e)
		{

        	die('Erreur : ' . $e->getMessage());
		}


		//Recuperation de l'utilisateur 
		$req = $bdd->prepare('INSERT INTO acheteur (nomA, prenomA, mailA, adresse, CodePostal, ville, Pays, Telephone ,pass) VALUES (:nomA, :prenomA, :mailA, :adresse, :CodePostal, :ville, :Pays, :Telephone, :pass'));
		$req = $bdd->execute(array(
			'nomA' => $nomA,
			'prenomA' => $prenomA,
			'mailA' => $mailA,
			'adresse' => $adresse,
			'CodePostal' => $CodePostal,
			'ville' => $ville,
			'Pays'=> $Pays,
			'Telephone' => $Telephone,
			'pass' => $pass
		));

		echo 'Vous faite maintenant partie de nos Client. Bienvenue !';
		
		$req->closeCursor(); // Termine le traitement de la requête

		?>	
		

	</body>
</html>
