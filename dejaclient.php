
<?php


$mailA = filter_input(INPUT_POST, 'mailA');
$pass = filter_input(INPUT_POST, 'pass');
$hash= password_hash('$pass', PASSWORD_DEFAULT);
$IDAcheteur = filter_input(INPUT_POST, 'IDAcheteur');

if (!empty($mailA))
{
	if(!empty($hash))
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
			$sql = "SELECT mailA, pass, IDAcheteur FROM acheteur WHERE mailA='$mailA' ";
			if ($conn->query($sql))
			{
				if ('mailA' == '$mailA')
				{
					echo "Adresse email OK !";
				}
				else 
				{
					echo "adresse email inconnue !";
				}


				if (password_verify('pass', $hash))
				{
			   		echo 'Le mot de passe est Valide !';
				} 
				else 
				{
			   		echo 'Le mot de passe est Invalide.';
				}	
			}





			// Voir l'exemple fourni sur la page de la fonction password_hash()
			// pour savoir d'où cela provient

			

			/*if ($conn->query($sql))
			{
				if ('pass' != '$pass')
				{
					echo "Mot de passe OK !";
				}
				else 
				{
					echo " Erreur de mot de passe !";
				}
				if ('mailA' != '$mailA')
				{
					echo "Adresse email OK !";
				}
				else 
				{
					echo "adresse email inconnue !";
				}

				/*echo "Les coordonnées du client sont correct!" ."<br>";
				$_SESSION['IDAcheteur'] = $IDAcheteur;
	        	echo 'Vous êtes connecté !';
			}
			else
			{
				echo "Error: Mauvais identifiant ou mot de passe !" . $sql . "<br>" . $conn->error;
			}*/
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

?>
