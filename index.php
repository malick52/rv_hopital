
<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
define('URL','http://localhost/rv/');
?>




<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../rv/css/style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" >


                <label><b>Mot de passe</b></label>
                <input type="text" placeholder="Entrer le mot de passe" name="password" >

                <input type="submit" id='submit' name="user" value='connexion' >
                <?php
               if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>



<?php  
///require_once'/var/www/html/rv/model/connexionn.php';

/*
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
   
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($con,htmlspecialchars($_POST['username'])); 
    $password = mysqli_real_escape_string($con,htmlspecialchars($_POST['password']));
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              nom_utilisateur = '".$username."' and mot_de_passe = '".$password."' ";
        $exec_requete = mysqli_query($con,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: liste.php');
        }
        else
        {
           header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: index.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
}

?>











