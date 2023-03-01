<html>
<head>
	<title>Ajouter un apprenant a la base</title>
	<link rel="stylesheet" href="css/bootstrap-4.6.1-dist/css/bootstrap.min.css" type="text/css">
</head>
<body>
	<div class="container">
<h1><center>Bienvenue sur notre pages d'accueil</center></h1>
		<div class="row">
			<div class="col-6">
				<img src="images/creer-une-boutique-en-ligne-e-commerce.jpg" class="rounded float-center">
			</div>
			<div class="container py-5">
				<div class="row">
					
        <div class="col-md-6">
			<div class="card" style="width: 18rem;">
  <img src='images/sac.jpg' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">7000fcfa</h5>
    <p class="card-text">sac en cuire</p>
    <a href="#" class="btn btn-primary">sac</a>
  </div>
    </div>
    </div>
    <div class="col-md-6 mx-auto">
			<div class="card" style="width: 18rem;">
  <img src='images/mmn.jpg' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">6000fcfa</h5>
    <p class="card-text">de haute qualite</p>
    <a href="#" class="btn btn-primary">pantalon</a>
  </div>
    </div>
</div>
    <?php
//onnexion au serveur de BD et choix de la base
$conn = mysqli_connect('localhost', 'root', '', 'thiago');
if(mysqli_connect_errno()){
	echo 'Echec connexion <br>';
	echo "Messaged'erreur : ",mysqli_connect_error(); 
}
else{//debut bloc des traitements des donnees sur la BD
		echo 'connexion reussie! <br>';

		//requete SQL
		$requete = "select * from produit";
		//execution de la requete SQL
		$resultats = mysqli_query($conn, $requete) or die(mysqli_error());

		//affichage du resultat(affichage formater)
		while($ligne = mysqli_fetch_assoc($resultats)){
//echo ' $ligne['prix']';
?>  
<div class="col-md-6 mx-auto py-5">
			<div class="card" style="width: 18rem;">
  <img src='images/<?php echo $ligne['images'];?>' class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $ligne['prix']?></h5>
    <p class="card-text"><?php echo $ligne['commentaire']?></p>
    <a href="#" class="btn btn-primary"><?php echo $ligne['nom']?></a>
  </div>
    </div>
    </div>
<?php
    }
}//fin du else
?>
 </div>
			<div class="container text-center">
			<button type="button" class="btn btn-lg bg-primary m-2 p-2"><a href="formulaire.html" class="text-white">
				Vous pouvez visiter nos pages</a></button>	
			</div>
</body>
</html>