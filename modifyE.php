<?php

ini_set('display_errors', 1);
try
{

  $bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8','luc', 'lucho1803');
}
catch (Exception $e){ 

  die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['modifier']))
{
  $id_modif = $_POST['children_id'];
  $req =$bdd->query("SELECT * FROM  children WHERE children_id=" . $id_modif);
  while ($donnees = $req->fetch())
    {
    echo "<form method='POST'>
        <textarea name='firstname'>" . $donnees['children_firstname'] . "</textarea>
        <textarea name='lastname'>" . $donnees['children_lastname'] . "</textarea>
        <textarea name='birthday'>" . $donnees['children_birthday'] . "</textarea>
        <textarea name='adress'>" . $donnees['children_adress'] . "</textarea>
        <textarea name='parents_contact'>" . $donnees['children_parents_contact'] . "</textarea>
        <textarea name='remarks'>" . $donnees['children_remarks'] . "</textarea>
        <button  class='button' name='submit' type='submit' value='Envoyer'>Envoyer</button>
      </form>";
    } 
      

if(isset($_POST['submit']))
{
  $id_modif = $_POST['children_id'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $birthday = $_POST['birthday'];
  $adress = $_POST['adress'];
  $parents_contact = $_POST['parents_contact'];
  $remarks = $_POST['remarks'];
  $query = "UPDATE children SET 
    children_firstname = '".$firstname."',
      children_lastname = '".$lastname."',
      children_birthday = '".$birthday."',
      children_adress = '".$adress."',
      children_parents_contact = '".$parents_contact."',
      children_remarks = '".$remarks."'
    WHERE children_id='" . $id_modif;
     $bdd->query($query);

// var_dump($id_modif);
// var_dump($firstname);
// var_dump($lastname);
// var_dump($birthday);
// var_dump($adress);
// var_dump($parents_contact);
// var_dump($remarks);
}

}  
