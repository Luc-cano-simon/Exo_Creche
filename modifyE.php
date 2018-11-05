
<?php
// ini_set('display_errors', 1);
try
{

  $bdd = new PDO('mysql:host=localhost;dbname=creche;charset=utf8','luc', 'lucho1803');
}
catch (Exception $e){
  die('Erreur : ' . $e->getMessage());
};

print_r($_POST);



if(isset($_POST['modifier']))
{
  $id_modif = $_POST['children_id'];
  $req =$bdd->query("SELECT * FROM  children WHERE children_id=" . $id_modif);
  while ($donnees = $req->fetch())
    {
    echo  "<div style='margin-top: 5%;'>
          <form method='post'>
            <tr><td><input type='hidden' name='children_id' value=". $donnees['children_id'] . "></tr></td>
            <tr><td><textarea name='children_firstname'>" . $donnees['children_firstname'] . "</textarea></td>
            <td><textarea name='children_lastname'>" . $donnees['children_lastname'] . "</textarea></td>
            <td><input type='date' name='children_birthday' value=" . $donnees['children_birthday'] . "></td>
            <td><textarea name='children_adress'>" . $donnees['children_adress'] . "</textarea></td>
            <td><textarea name='children_parents_contact'>" . $donnees['children_parents_contact'] . "</textarea></td>
            <td><textarea name='children_remarks'>" . $donnees['children_remarks'] . "</textarea></td>
            <td><button  class='button' name='submit' type='submit' value='Envoyer'>Envoyer</button></td>
          </form>
        </div>";  
  };    
}



 // var_dump($id_modif);
if(isset($_POST['submit']))
{
   $id_modif = $_POST['children_id'];
  $firstname = $_POST['children_firstname'];
  $lastname = $_POST['children_lastname'];
  $birthday = $_POST['children_birthday'];
  $adress = $_POST['children_adress'];
  $parents_contact = $_POST['children_parents_contact'];
  $remarks = $_POST['children_remarks'];
  $bdd->query("UPDATE children SET 
    children_firstname = '".$firstname."',
    children_lastname = '".$lastname."',
    children_birthday = '".$birthday."',
    children_adress = '".$adress."',
    children_parents_contact = '".$parents_contact."',
    children_remarks = '".$remarks."' WHERE children_id = " . $id_modif);
  
  header('Location: enfant.php');
  // var_dump($id_modif);
  // modify($id_modif);

}

    
?>