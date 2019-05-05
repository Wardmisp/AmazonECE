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

	<section align="center">
		<?php
			session_start();

			$bdd = new PDO ('mysql:host=localhost;dbname=amazonece', 'root', '');

			if (isset($_POST['formconnexion']))
			{
				$mailconnect = htmlspecialchars($_POST['mailconnect']);
				$mdpconnect = filter_input(INPUT_POST, 'mdpconnect');
	
				echo "ok bouton Connexion";

				if (!empty($mailconnect) AND !empty($mdpconnect))
				{
					$requser = $bdd->prepare("SELECT * FROM acheteur WHERE mailA = ? AND pass = ?");
					$requser->execute(array($mailconnect,$mdpconnect));
					echo "ok mail et mot de passe remplie";
					echo "$mdpconnect";
					

					$userexist = $requser->rowCount();

					if ($userexist == 1)
					{
						echo " userexist";
						$userinfo = $requser->fetch();
						$_SESSION['IDAcheteur'] = $userinfo['IDAcheteur'];
						$_SESSION['nomA'] = $userinfo['nomA'];
						$_SESSION['mailA'] = $userinfo['mailA'];
						header("Location : profil.php?id=".$_SESSION['IDAcheteur'] );
					}
					else
					{
						$message = "Mauvais mail ou mot de passe !";
					}
				}
				else
				{
					$message = " Tous les champs doivent être complétés !";
				}
			}

			?>
			<?php
				if(isset($message))
				{
					echo '<font color="red">' .$message."</font>";
				}
			?>
		
	</section>

	<footer>
 		<small>
 			<td align=”center”></td>
 			<p>Redigé par : Mathilde Giraudon. 
 			<br>
 			Contact: <a href="mailto:jean-pierre.segado.ece.fr">mathilde.giraudon@gmail.com</a></p>
 			<p>Copyright &copy;2019 Latest update: 
 				<time datetime="2019-04-29 18:00">Aujourd’hui</time></p>
 		</small>
	</footer>
	</body>
</html>