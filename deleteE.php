<?php
 
	ini_set('display_errors', 1);
	try
	{

		$bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8','luc', 'lucho1803');
	}

	catch (Exception $e){

		die('Erreur : ' . $e->getMessage());
	}  

  	if(isset($_POST['supprimer']))
    {
	    $id_del = $_POST['children_id'];
		$bdd->query("DELETE FROM children WHERE children_id=" . $id_del);  
		header('Location: index.php');
    }


?>

 