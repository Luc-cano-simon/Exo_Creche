<!DOCTYPE html>
<html>
<head>
	<!-- <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <link href="node_modules/bootstrap/dist/js/bootstrap.min.js" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<title> Ajouter une fiche enfant </title>
</head>
<body>


<!-- navbar -->


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Creche</a>
    </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="http://localhost/creche">Accueil</a></li>
      <li><a href="">Enfant</a></li>
      <li><a href="http://localhost/creche/activites.php">Activités</a></li>
      <li class="active"><a href="http://localhost/creche/AddFicheEnfant.php">Ajouter une fiche enfant </a></li>
      <li><a href="AddActivites.php">Ajouter une Activité </a></li>
    </ul>
  </div>
</nav>

<h3 class="Titre">Ajouter une fiche enfant </h3>

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

  
  if(empty($_POST['children_firstname']) && empty($_POST['children_lastname'] && empty($_POST['children_birthday']&& empty($_POST['children_adress']&& empty($_POST['children_parents_contact'] && empty($_POST['children_remarks']))))))
  {
    echo "";
  }
// sinon on récupére les données saisies dans les inputs 
  else
  { 
    
    $children_firstname = $_POST['children_firstname'];
    $children_lastname = $_POST['children_lastname'];
    $children_birthday = $_POST['children_birthday'];
    $children_adress  = $_POST['children_adress'];
    $children_parents_contact  = $_POST['children_parents_contact'];
    $children_remarks = $_POST['children_remarks'];



  }




  $bdd->query("INSERT INTO children (children_firstname, children_lastname, children_birthday, children_adress,children_parents_contact,children_remarks)
    VALUES ('$children_firstname','$children_lastname', '$children_birthday','$children_adress','$children_parents_contact','$children_remarks')");

    // var_dump($children_firstname);
    // var_dump($children_lastname);
    // var_dump($children_birthday);
    // var_dump($children_adress);
    // var_dump($children_parents_contact);
    // var_dump($children_remarks);

?>






<form method="POST" class="add">

  <p> Prenom </p>
  <input type="text"  name="children_firstname" placeholder="">
  <p> Nom </p>
  <input type="text"  name="children_lastname" placeholder="">
  <p> Date de Naissance  </p>
  <input type="date" name="children_birthday" placeholder="">
  <p> Adresse  </p>
  <input type="text" name="children_adress" placeholder="">
  <p> Contact des parents  </p>
  <input type="text" name="children_parents_contact" placeholder="">  
  <p> Remarques  </p>
  <input type="text" name="children_remarks">
  
  <div id="but" >
    <button type="submit" name="submit" value="Envoyer">Ajouter</button>
  </div>

</form>





</body>
</html>