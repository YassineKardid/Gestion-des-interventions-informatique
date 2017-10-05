<!DOCTYPE html>
<html lang="en">
<head>
<title>Home | Centre d'intervention</title>
<meta charset="utf-8">
    
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
?>

    
<meta name="viewport" content="width=device-width; initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/footerStyle.css"/>
    <link rel="stylesheet" type="text/css" href="css/default.css"/>
    <link rel="stylesheet" type="text/css" href="css/tabStyle.css">
    <link rel="stylesheet" href="style.css" />   
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/myStyle.css">
    <link rel="stylesheet" type="text/css" href="css/centreStyle.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/home-slider01.js"></script>
<script type="text/javascript" src="js/home-slider02.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/html5shiv.js"></script>

</head>
<body>
<div class="block1 p_bottom_zero">
    
   
    
    <div class="container_12"> 
    <!--==============================header=================================-->
    <img class="left" src="img/im1.png" alt="" title="" />
    <img class="right" src="img/im4.jpg" alt="" title="" />
      
        
        <header class="homepage">
       
          
      <h1 class="redal"><a class="logo" href="index.html"><span class="underline">Redal</span></a></h1>
     
            
              
          <nav>
        <ul class="sf-menu sf-js-enabled">
          <li><a href="index.html">Acceuil</a></li>
          <li><a href="reclamation.html">Envoyer une réclamation</a></li>
          <li class="current"><a href="centre.html">Centre d'intervention</a></li>
            
        </ul>
      <select><option selected="selected" value="">Please choose page</option><option value="index.html">Acceuil</option><option value="services.html">Envoyer une reclamation</option><option value="javascript:">Projects »</option><option value="project-threecol.html">-----Three Cols </option><option value="project-fourcol.html">-----Four Cols</option><option value="project-details.html">-----Project Details</option><option value="javascript:">Pages »</option><option value="javascript:">-----Home »</option><option value="index.html">----------With Slider</option><option value="index2.html">----------Second Slider</option><option value="index3.html">----------Without Slider</option><option value="about.html">-----About</option><option value="javascript:">-----Pricing »</option><option value="pricing-threecol.html">----------Three Cols</option><option value="pricing-fourcol.html">----------Four Cols</option><option value="components.html">-----Components</option><option value="404.html">-----404</option><option value="faq.html">-----FAQ</option><option value="javascript:">Blog »</option><option value="blog.html">-----Blog</option><option value="blog-single.html">-----Blog Single</option><option value="contact.html">Centre d'intervention</option></select></nav>
          
          
            
            
            
            
      <div class="clear"></div>
    </header>
  </div>
</div>
   <br/>
    <center id ="titre"><h5><b>Centre d'intervention </b></h5> <h3><b>Liste des réclamations</b></h3></center>
    <HR width="75%"> </HR>
<div class="block2">
  <div class="container_12"> 
    <!--==============================content================================-->
    <section class="content">
      <div class="wrapper">
        
          <ul id="signup">
        
  
    <a href="listes_reclamations_tr.php"><button type="button"> Voir les réclamations</button></a>
     
    <a href="listes_intervention_tr.php"><button type="button"> Voir les interventions</button></a>      
      
   <a href="intervention.html"><button type="button">Remplir une intervention</button></a> 
        
    <a href="ajouter_technicien.html"><button type="button">Ajouter un technicien</button></a>
        
    <a href="ajouter_mat%C3%A9riel.html"><button type="button">Ajouter un matériel</button></a>
     
       </ul>
          
          
      </div>
    </section>
    <!--==============================content================================-->
<table id="tab"  summary="exemple de structure d'un tableau de données 2 lignes, 2 colonnes">
 
  <tr>
    <th >Numéro de réclamation</th>
    <th id="c2">Date</th>
    <th id="c3">Inventaire</th>  
    <th id="c4">Type de probléme</th>
    <th id="c5">Description</th>
      
  </tr>

<?php    
$rec=$bdd->query('SELECT * FROM reclamation'); 
  
    while ($donnees = $rec->fetch())
{
?>   
  <tr>
    <td width="12px"><?php echo $donnees['num_reclamation'];?></td>
    <td><?php echo $donnees['date_reclamation'];?></td>
    <td><?php echo $donnees['inventaire'];?></td> 
    <td><?php echo $donnees['type_probleme'];?></td>
    <td ><?php echo $donnees['description'];?></td>
  </tr>
  
    <?php
}

$rec->closeCursor(); // Termine le traitement de la requête

?>
    
    
</table>
  </div>
</div>
    
         
    
    
     
      
   <!-- /* ////////////////////////////////////////////////formulaire2///////////////////////////////////////////   */-->   
    
<div class="hireus_block">
  <div class="container_12">
    <section class="">
      <div class="wrapper">
       
        <article class="grid_9">
          <form action="#" method="post" id="cform" name="cform" class="clearfix">
          </form>
          <div id="output"></div>
        </article>
      </div>
    </section>
  </div>
</div>
<div class="block3"> 
    
    <!-- ------------------map----------------------------------->

    

    
    
    
  <!--==============================footer=================================-->
  <div class="container_12">
    <footer>
      <div class="wrapper">
        <div class="grid_6">
          
          <ul class="social">
            <li> <a href="#">
              <figure><img src="images/soc2.png" width="31" height="26" alt=""></figure>
              Didràk Yassine</a> </li>
            <li class="cont_item m_bottom_zero"> <a href="index-5.html">
              <figure><img src="images/soc4.png" width="31" height="20" alt=""></figure>
              ykardid@gmail.com</a> </li>
          </ul>
        </div>
        
          <strong  id="fot"><h1 ><mark ><a href="index.html"> Acceuil </a></mark> </h1></strong>
          
          
      </div>
    </footer>
  </div>
    
    
    
</div>

<script type="text/javascript" src="js/superfish.js"></script> 
<script type="text/javascript" src="js/jquery.responsivemenu.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
<script src="js/jquery.carouFredSel-6.1.0-packed.js" type="text/javascript"></script> 
<script src="js/contact.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
