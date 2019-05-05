<?php


$bdd = new PDO ('mysql:host=localhost;dbname=amazonece', 'root', '');

if (isset($_POST['forminscription']))
{
	$nomins = htmlspecialchars($_POST['nomins']);
	$prenomins = htmlspecialchars($_POST['prenomins']);
	$adresseins = htmlspecialchars($_POST['adresseins']);
	$villeins = htmlspecialchars($_POST['villeins']);
	$codepostalins = htmlspecialchars($_POST['codepostalins']);
	$paysins = htmlspecialchars($_POST['paysins']);
	$telephoneins = htmlspecialchars($_POST['telephoneins']);
	$mailins= htmlspecialchars($_POST['mailins']);
	$passins = filter_input(INPUT_POST, 'passins');
	$hash= password_hash('$passins', PASSWORD_DEFAULT);


	$typeCBins = htmlspecialchars($_POST['typeCBins']);
	$numeroCBins = htmlspecialchars($_POST['numeroCBins']);
	$nomCBins= htmlspecialchars($_POST['nomCBins']);
	$dateCins= htmlspecialchars($_POST['dateCins']);
	$codeCBins= htmlspecialchars($_POST['codeCBins']);


	if(!empty($_POST['monins']) AND !empty($_POST['prenomins']) AND !empty($_POST['adresseins']) AND !empty($_POST['villeins']) AND !empty($_POST['codepostalins'])  AND !empty($_POST['paysins']) AND !empty($_POST['telephoneins']) AND !empty($_POST['mailins']) AND !empty($_POST['nomCBins']) AND !empty($_POST['typeCBins']) AND !empty($_POST['numeroCBins']) AND !empty($_POST['dateCins']) AND !empty($_POST['codeCBins']))
	{
		if (filter_var($mailins, FILTER_VALIDATE_EMAIL))
		{
			$reqmail= $bdd-> prepare("SELECT * FROM acheteur WHERE mailA = ?");
			$reqmail-> execute(array($mailins));
			$mailexist = $reqmail->rowCount();

			if($mailexist == 0)
			{
				$insertmbr = $bdd->prepare("INSERT INTO achteur(monA,prenomA,mailA,adresse,codepostal,ville,pays,telephone,pass) VALUES (?,?,?,?,?,?,?,?,?)");
				$insertmbr->execute(array($mailins, $prenomins,$mailins,$adresseins,$codepostalins,$villeins,$paysins,$telephoneins,$passins));
				
				$insertcb = $bdd->prepare("INSERT INTO carte (typeCB,numeroCB,nomCB,dateCB,codeCB) VALUES (?,?,?,?,?)");
				$insertcb->execute(array($typeCBins,$numeroCBins,$nomCBins,$dateCins,$codeCBins));
				
				$message = "Votre compte a bien été créer! <a href=\"connexion.php\">Me connecter</a>";		
			}
			else
			{
				$message = "Adresse déjà utilisé !";
			}
		}
		else
		{
			$message ="Votre adresse mail n'est pas valide !";
		}
	}
	else 
	{
		$message = "Tous les champs doivent être complétés !";
	}
}

?>
<?php
	if(isset($message))
	{
		echo '<font color="red">' .$message."</font>";
	}
?>