<!DOCTYPE html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Lato:700');
</style>
<script>
function info(nom, description, prix, restant,video,photo){
  w=open("",'popup','width=400,height=400,toolbar=no,scrollbars=no,resizable=yes');	
  w.document.write("<link rel=\"stylesheet\" type=\"text/css\" href=\"piscine.css\"/>");
  w.document.write("<img class = \"imgstuff \" src = \" "+photo+" \" height = \"30% \" width = \"30%\" />" );
  w.document.write("<title> Votre  :"+nom+"</title>");
  w.document.write("<body class =\"descristuff\"> Description :"+description+"<br>");
  w.document.write("Prix:"+prix+"<br>");
  w.document.write("Restant:" + restant +"<br>");
  if (video){
  w.document.write("<video width =\"160\" height =\"120\" controls><source src= "+video+" type = \"video/mp4\"></video>");
  }
  w.document.write("</body>");
  w.document.close();
}
</script>

<meta charset="UTF-8">
	<title> Amazon ECE</title>
<link rel="stylesheet" type="text/css" href="piscine.css"/>
</head>
<body>
	<div id="header">
		<nav>
		<strong class="logo"><a href="Sinstest.php"> <img src = "logo.png"/></a></strong>
		<ul>
			<li><a title="Des livres et nous" href = "livres.php" >Livres</a></li>
			<li><a title="Poussons la chansonnette" href="musique.php">Musique</a></li>
			<li><a title="Habillement" href="vetements.php">Vêtements</a></li>
			<li><a title="Sports et Loisirs" href="sport.php">Sports et Loisirs</a></li>
			<li><a title="Connexion" href=<!-- A COMPLETER -->>Se connecter</a></li>
			<li><a title="Vente Flash" href=<!-- A COMPLETER -->>Ventes Flash</a></li>
		</ul>
		</nav>
	</div>
	<div class = "global">
		<ul><?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=amazonECE;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer
$requete = 'SELECT * FROM items WHERE categorie = "Sport"';
// On récupère le contenu
$reponse = $bdd->query($requete);

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
	<div class = "mainsection">
    <img title = "cliquez pour en savoir plus" src ="<?php echo $donnees['photoI']; ?>" onclick = "info('<?php echo $donnees['nomI'];?>','<?php echo $donnees['descriptionI'];?>','<?php echo $donnees['prixI'];?>','<?php echo $donnees['nombreI'];?>','<?php echo $donnees['videoI'];?>','<?php echo $donnees['photoI'];?>')"/>
	<span class= "nomItem"><h3><?php echo $donnees['nomI'];?></h3><br/></span><input type="button"value="ajouter au panier"></div>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>	
<p></p>
<input type="button"value="passer à la commande">
		</ul>
	</div>
</body>