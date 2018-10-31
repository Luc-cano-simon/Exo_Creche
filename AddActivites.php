<!DOCTYPE html>
<html>
<head>
	<!-- <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="node_modules/bootstrap/dist/js/bootstrap.min.js" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<title> Ajouter une Activités </title>
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
      <li><a href="">Enfant</a></li>
      <li><a href="http://localhost/creche/activites.php">Activités</a></li>
      <li><a href="http://localhost/creche/AddFicheenfant.php">Ajouter une fiche enfant </a></li>
      <li><a href="AddActivites.php">Ajouter une Activité </a></li>
    </ul>
  </div>
</nav>

<h3 class="Titre">Ajouter une activité </h3>

<?php

try
  {

    $bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8',
      'luc', 'lucho1803');
  }

  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
// vérifie si tout les champs sont vides

  
  if(empty($_POST['activity_name'] && empty($_POST['activity_type'] && empty($_POST['activity_number_max_child']))))
  {
    echo "";
  }
// sinon on récupére les données saisies dans les inputs 
  else
  { 
    header('Location: activites.php');
    $activity_name = $_POST['activity_name'];
    $activity_type = $_POST['activity_type'];
    $activity_number_max_child = $_POST['activity_number_max_child'];
   
  }




  $bdd->query("INSERT INTO activity (activity_name, activity_type, activity_number_max_child)
    VALUES ('$activity_name','$activity_type','$activity_number_max_child')");


?>









<form method="POST" class="add">

  <p> Nom de l'activité </p>
  <input type="text"  name="activity_name">
  <p> Type de l'activité </p>
  <input type="text"  name="activity_type">
  <p> Capacité maximum pour l'activité  </p>
  <input type="text" name="activity_number_max_child">
  
  
  <div id="but" >
    <button type="submit" name="submit" value="Envoyer">Ajouter</button>
  </div>

</form>




</body>
</html>