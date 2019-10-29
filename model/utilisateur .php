
<?php
require_once'connexionn.php';
function utilisateur($username,$password) 
{ 
   require"connexion.php";
   $sql = "SELECT * FROM utilisateur WHERE  login_utilisateur = '$_POST[login]'";
   $resultat = $connexion->query($sql);
   $user = mysqli_fetch_array($resultat);
   
   if ($user['password'] == $_POST['mdp']) {
      session_start();
      $_SESSION['auth'] = $user;
      header('Location: etudiant/listetudiant.php');
   }else{
      header('Location: login.php');
   }
?>