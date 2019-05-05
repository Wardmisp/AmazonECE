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

	$nomins = htmlspecialchars($_POST['nomins']);
	$prenomins = htmlspecialchars($_POST['prenomins']);
	$adresseins = htmlspecialchars($_POST['adresseins']);
	$villeins = htmlspecialchars($_POST['villeins']);
	$codepostalins = htmlspecialchars($_POST['codepostalins']);
	$paysins = htmlspecialchars($_POST['paysins']);
	$telephoneins = htmlspecialchars($_POST['telephoneins']);
	$mailins= htmlspecialchars($_POST['mailins']);
	$passins = filter_input(INPUT_POST, 'passins');
	

	$typeCBins = htmlspecialchars($_POST['typeCBins']);
	$numeroCBins = htmlspecialchars($_POST['numeroCBins']);
	$nomCBins= htmlspecialchars($_POST['nomCBins']);
	$dateCBins = htmlspecialchars($_POST['dateCBins']);
	$codeCBins= htmlspecialchars($_POST['codeCBins']);


	if (!empty($nomins))
	{
		if (!empty($prenomins))
		{
			if (!empty($adresseins))
			{
				if (!empty($villeins))
				{
					if(!empty($codepostalins))	
					{
						if (!empty($paysins))
						{
							if (!empty($telephoneins))
							{
								if (!empty($mailins))
								{
									if(!empty($passins))
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
											VALUES ('$nomins','$prenomins','$adresseins','$villeins','$codepostalins','$paysins','$telephoneins','$mailins','$passins')";

											if ($conn->query($sql))
											{
												echo "Les coordonnées du nouveau client ont été ajouter avec sucess !" . "<br>";
											}
											else
											{
												echo "Erreur: les coordonnées n'ont pas été ajouté !" . $sql . "<br>" . $conn->error;
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

	if (!empty($typeCBins))
	{
		if(!empty($numeroCBins))
		{
			if (!empty($nomCBins))
			{
				if(!empty($dateCBins))
				{
					if(!empty($codeCBins))
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
							values ('$typeCBins','$numeroCBins','$nomCBins','$dateCBins','$codeCBins')";

							if ($conn->query($sql))
							{
								echo "Les coordonnées Banquaire du nouveau client ont été ajouter avec sucess! " . "<br>";
							}
							else
							{
								echo "Erreur: les coordonnées banquaire n'ont pas été ajouté ! " . $sql . "<br>" . $conn->error;
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

