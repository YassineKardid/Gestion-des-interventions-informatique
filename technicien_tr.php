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

if(!empty($_POST['nom'])and !empty($_POST['prenom'])and !empty($_POST['cin'])and !empty($_POST['phone'])and !empty($_POST['adresse']))
{

$req = $bdd->prepare('INSERT INTO technicien(nom_t,prenom_t,CIN,telephone_t,adresse_t) VALUES(?,?,?,?,?)');
 
$req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['cin'],$_POST['phone'],$_POST['adresse']));
    
 ?>
      
<SCRIPT LANGUAGE="JavaScript">
alert("Insertion efféctué avec succés!")
location.href = "ajouter_technicien.html";
</SCRIPT>
   
 <?php      
  
}

else
{
 ?>
      
<SCRIPT LANGUAGE="JavaScript">
alert("l'insertion est échoué.Remplir tous les champs du formulaire!")
location.href = "ajouter_technicien.html";
</SCRIPT>
   
 <?php  
}

?>