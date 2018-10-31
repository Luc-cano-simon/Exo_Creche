<!DOCTYPE html>
<html>
<head>
	<!-- <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="node_modules/bootstrap/dist/js/bootstrap.min.js" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<title> Activités </title>
</head>
<body>


<!-- navbar -->


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Creche</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/creche">Accueil</a></li>
      <li><a href="">Enfant</a></li>
      <li class="active"><a href="http://localhost/creche/activites.php">Activités</a></li>
      <li><a href="http://localhost/creche/AddFicheenfant.php">Ajouter une fiche enfant </a></li>
      <li><a href="AddActivites.php">Ajouter une Activité </a></li>
    </ul>
  </div>
</nav>

<h3 class="Titre">Liste des activités</h3>



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
    <th>Nom de l'activité </th>
    <th>Type de l'activité</th>
    <th>Nombre d'enfant maximum</th>
    <th>Info</th>
  </thead>

  <?php 
  $reponse = $bdd->query('SELECT * FROM activity');
    while($donnees=$reponse->fetch())
    {
      echo 
      '<tr>
      <td>' . $donnees['activity_name'] . '</td><td>' . $donnees['activity_type'] . '</td><td>' . $donnees['activity_number_max_child'] . '</td><td><a href="">+ info</a></td>
      </tr>' ;
    }
  ?>

</table>






</body>
</html>
