<?php
 
	ini_set('display_errors', 1);
	try
	{

		$bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8','luc', 'lucho1803');
	}

	catch (Exception $e){

		die('Erreur : ' . $e->getMessage());
	}  

  	if(isset($_POST['supprimerA']))
    {
	    $id_delA = $_POST['activity_id'];
		$bdd->query("DELETE FROM activity WHERE activity_id=" . $id_delA);  
		// header('Location: index.php');
    }


?>