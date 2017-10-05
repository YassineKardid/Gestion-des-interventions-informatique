<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=redal_intervention;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée

if(!empty($_POST['inventaire'])and !empty($_POST['numagent'])and !empty($_POST['societe'])and !empty($_POST['garentie']))
{
$req = $bdd->prepare('INSERT INTO materiel(inventaire,societe,date_achat,garentie,duree_garentie,num_type,agent_id) VALUES(?,?,?,?,?,?,?)');
 
$req->execute(array($_POST['inventaire'],$_POST['societe'],$_POST['dateachat'],$_POST['garentie'],$_POST['dureegarentie'],$_POST['genre'],$_POST['numagent'])); 
   ?>
<SCRIPT LANGUAGE="JavaScript">

alert("l'insertion est réussie!")
location.href = "ajouter_matériel.html";
</SCRIPT>



 <?php   
}

else
{
//header('Location: index.html');
    ?>
    <SCRIPT LANGUAGE="JavaScript">
alert("l'insertion est échoué.Remplir tous les champs du formulaire!")
location.href = "ajouter_matériel.html";
</SCRIPT>


 <?php   
}

?>