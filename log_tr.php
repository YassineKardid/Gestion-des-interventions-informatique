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
/*$req = $bdd->prepare('INSERT INTO technicien VALUES(?,?,?,?,?,?,?)');
$req->execute(array(2,$_POST['nom'], $_POST['prenom'],"HindAjram","14pu12",$_POST['phone'],$_POST['adresse']));
header('Location: index.html');*/


if( !empty($_POST['identifient'])&&!empty($_POST['passeword']) ) // si formulaire soumis
{
 $id=$_POST['identifient'];
 $pass=$_POST['passeword'];
}

/* echo $a; 
 echo $b;*/
/*$req = $bdd->prepare('INSERT INTO passe_redal VALUES(?,?)');
$req->execute(array("redal2","redalredal"));*/


$user=$bdd->query('SELECT * FROM passe_redal');

$donnees = $user->fetch();
$id_c=$donnees['identifient'];
$pass_c=$donnees['mot_passe'];


if (strcmp($id, $id_c) !== 0||strcmp($pass, $pass_c) !== 0) {
    ?>
    <SCRIPT LANGUAGE="JavaScript">
alert("Identifient ou mot de passe incorrect!")
location.href = "login.html";
</SCRIPT>
   

<?php 
    
    /*Retourne < 0 si str1 est inférieure à str2; > 0 si str1 est supérieure à str2, et 0 si les deux chaînes sont égales.*/
}
else
{
    header('Location: centre.html');
}




?>