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

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM items');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <?php echo $donnees['IDI']; ?><br />
    <?php echo $donnees['nomI']; ?>, et il le vend à <?php echo $donnees['nomI']; ?><br />
     <?php echo $donnees['descriptionI']; ?><?php echo $donnees['categorie']; ?> <br />
    
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>