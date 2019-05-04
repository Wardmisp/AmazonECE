<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="compte.css"/>
 	<title>Connexion</title>
</head>


<body>
	<header>
		<div id="logo">
			<img src="LOGO_AZ_ECE.png" class="flottant" href="page d'acceuil"/>
		</div>
			<ul>
				<li><a title="Les Caégories" href="categories.html">Catégories</a></li>
				<li><a title="Ventes Flash" href="venteflash.html">Vente Flash</a></li>
				<li><a title="Vendre" href="vendre.html">Vendre</a></li>
				<li><a title="Connexion" href="Connexion.html">Se connecter</a></li>
				<li><a title="Panier" href="panier.html">Panier</a></li>
				<li><a title="Administrateur" href="administrateur.html">Administrateur</a></li>
			</ul>
	</header>

	<section>

	<?php

	$nomA = filter_input(INPUT_POST,'nomA');
	$prenomA = filter_input(INPUT_POST, 'prenomA');
	$adresse = filter_input(INPUT_POST, 'adresse');
	$ville = filter_input(INPUT_POST, 'ville');
	$codepostal = filter_input(INPUT_POST, 'codepostal');
	$pays = filter_input(INPUT_POST, 'pays');
	$telephone = filter_input(INPUT_POST, 'telephone');
	$mailA = filter_input(INPUT_POST, 'mailA');
	$pass = filter_input(INPUT_POST, 'pass');

	$typeCB = filter_input(INPUT_POST, 'typeCB');
	$numeroCB = filter_input(INPUT_POST, 'numeroCB');
	$nomCB = filter_input(INPUT_POST, 'nomCB');
	$dateCB = filter_input(INPUT_POST, 'dateCB');
	$codeCB = filter_input(INPUT_POST, 'codeCB');


	if (!empty($nomA))
	{
		if (!empty($prenomA))
		{
			if (!empty($adresse))
			{
				if (!empty($ville))
				{
					if(!empty($codepostal))	
					{
						if (!empty($pays))
						{
							if (!empty($telephone))
							{
								if (!empty($mailA))
								{
									if(!empty($pass))
									{
										$host = "localhost";
										$dbusername = "root";
										$dbpassword = "";
										$dbname = "amazonece";

										//Création de la connection
										$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

										if (mysqli_connect_error())
										{
											die('Connect Error ('. mysqli_connect_error() .') '. mysqli_connect_error());
										}
										else
										{
											$sql = "INSERT INTO acheteur (nomA,prenomA,adresse,ville,codepostal,pays,telephone,mailA,pass) 
											values ('$nomA','$prenomA','$adresse','$ville','$codepostal','$pays','$telephone','$mailA','$pass')";

											if ($conn->query($sql))
											{
												echo "Les coordonnées du nouveau client ont été ajouter avec sucess !";
											}
											else
											{
												echo "Error: " . $sql . "<br>" . $conn->error;
											}
											$conn->close();
										}				
									}
									else
									{
										echo "Passeword n'est pas remplie";
										die();
									}
								}
								else
								{
									echo "mail n'est pas remplie";
									die();
								}
							}
							else
							{
								echo " telephone n'est pas remplie";
								die();
							}
						}
						else
						{
							echo "pays n'est pas remplie";
							die();
						}
					}
					else
					{
						echo "codepostal n'est pas remplie";
						die();
					}
				}
				else
				{
					echo "ville n'est pas remplie";
					die();
				}
			}
			else
			{
				echo "adresse n'est pas remplie";
				die();
			}
		}
		else
		{
			echo "prenom n'est pas remplie";
			die();
		}
	}
	else
	{
		echo "nom n'est pas remplie";
		die();
	}

	if (!empty($typeCB))
	{
		if(!empty($numeroCB))
		{
			if (!empty($nomCB))
			{
				if(!empty($dateCB))
				{
					if(!empty($codeCB))
					{
						$host = "localhost";
						$dbusername = "root";
						$dbpassword = "";
						$dbname = "amazonece";

						//Création de la connection
						$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

						if (mysqli_connect_error())
						{
							die('Connect Error ('. mysqli_connect_error() .') '. mysqli_connect_error());
						}
						else
						{
							$sql = "INSERT INTO carte (typeCB,numeroCB,nomCB,dateCB,codeCB)
							values ('$typeCB','$numeroCB','$nomCB','$dateCB','$codeCB')";

							if ($conn->query($sql))
							{
								echo "Les coordonnées Banquaire du nouveau client ont été ajouter avec sucess! ";
							}
							else
							{
								echo "Error: " . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
					else
					{
						echo " code CB pas remplie";
						die();
					}
				}
				else
				{
					echo " date CB pas remplie";
					die();
				}
			}
			else
			{
				echo "nom CB pas remplie";
				die();
			}
		}
		else
		{
			echo "numeroCB pas remplie";
			die();
		}
	}
	else
	{
		echo "typeCB pas remplie";
		die();
	}
	?>
	</section>

</body>

