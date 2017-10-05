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

if(!empty($_POST['numrec'])and !empty($_POST['statu'])and !empty($_POST['typeinter'])and !empty($_POST['dateinter'])and !empty($_POST['resolution'])and !empty($_POST['numtech']))
{
echo "l'insertion est réussie";
$req = $bdd->prepare('INSERT INTO intervenir(technicien_id,num_reclamation,date_intervention,statu,type_intervention,resolution) VALUES(?,?,?,?,?,?)');
 
$req->execute(array($_POST['numtech'], $_POST['numrec'],$_POST['dateinter'],$_POST['statu'],$_POST['typeinter'],$_POST['resolution']));
//header('Location: index.html'); 
    
    
     ?>
      
<SCRIPT LANGUAGE="JavaScript">
alert("Tâche efféctué avec succés!")
location.href = "intervention.html";
</SCRIPT>
   
 <?php  
}

else
{
 ?>
      
<SCRIPT LANGUAGE="JavaScript">
alert("l'insertion est échoué.Remplir tous les champs du formulaire!")
location.href = "intervention.html";
</SCRIPT>
   
 <?php  
}

?>