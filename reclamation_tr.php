<html>
<body>
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

if(!empty($_POST['typeprb'])and !empty($_POST['inventaire'])and !empty($_POST['daterec'])and !empty($_POST['Description']))
{
//echo "l'insertion est réussie";
$req = $bdd->prepare('INSERT INTO reclamation(date_reclamation,type_probleme,description,inventaire) VALUES(?,?,?,?)');
 
$req->execute(array($_POST['daterec'], $_POST['typeprb'],$_POST['Description'],$_POST['inventaire']));
//header('Location: index.html');   
      ?>
      
<SCRIPT LANGUAGE="JavaScript">
alert("l'insertion est réussie!")
location.href = "reclamation.html";
</SCRIPT>
   
 <?php  
    
}

else
{
 ?>
      
<SCRIPT LANGUAGE="JavaScript">
alert("l'insertion est échoué.Remplir tous les champs du formulaire!")
location.href = "reclamation.html";
</SCRIPT>
   
 <?php  
}

?>
     </body>
    </html>