<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
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
	<tr>
		<td colspan="4"><big><u>Votre panier</u></big></td>
	</tr>
	</div>
	<div class = "global">
		<ul>
<form method="post" action="panier.php">
<table style="width: 400px">
	
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=amazonece;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu
$reponse = $bdd->query('SELECT * FROM items WHERE IDAcheteur=0');
$total = 0;

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
	
    <?php 
	$total += $donnees['prixI'];
	echo $donnees['nomI'].", ".$donnees['prixI']." euros, ".$donnees['descriptionI'].", ".$donnees['categorie'].", <br/><img src=\" ".$donnees['photoI']."\">"; 
    
	
	?>
   </p>
  <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
<p>Sous total : <span class="subtotal"></span> <?php echo $total;?>  €</p>
<input type="button"value="passer à la commande">
	
</table>
</form>
</body>
</html>