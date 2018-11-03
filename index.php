<!DOCTYPE html>
<html>
<head>
	<!-- <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="node_modules/bootstrap/dist/js/bootstrap.min.js" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<title>Accueil</title>
</head>
<body>


<!-- navbar -->


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Creche</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/creche">Accueil</a></li>
      <li><a href="http://localhost/creche/enfant.php">Enfant</a></li>
      <li><a href="http://localhost/creche/activites.php">Activités</a></li>
      <li><a href="http://localhost/creche/AddFicheEnfant.php">Ajouter une fiche enfant </a></li>
      <li><a href="http://localhost/creche/AddActivites.php">Ajouter une Activité </a></li>
    </ul>
  </div>
</nav>



<?php 


	
	try
	{

		$bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8','luc', 'lucho1803');
	}

	catch (Exception $e){

		die('Erreur : ' . $e->getMessage());
	}  

	?>



<table class="table table-hover">
	<thead>
		<th>Nom </th>
		<th>Prenom</th>
		<th>Option</th>
	</thead>

	<?php 
	$reponse = $bdd->query('SELECT * FROM children ORDER BY children_lastname ASC');
		while($donnees=$reponse->fetch())
		{
			echo 
			'<tr>
			<td>' . $donnees['children_lastname'] . '</td><td>' . $donnees['children_firstname'] . '</td><td><a href="">+ info</a></td>
			</tr>';
		}
	?>


</table>
</body>
</html>
			
			






