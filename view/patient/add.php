<?php
define('URL','http://localhost/rv/');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
	<meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
  </head>

<body>
<section class="nav-bar">
  <div class="nav-container">
    
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#">Acceuil</a>
        </li>
        <li>
          <a href="#">Liste Patient</a>
        </li>
        <li>
          <a href="#!">Ajouter Patient</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
      </ul>
    </nav>
  </div>
</section>
 
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script  src="function.js"></script>
<div id="container">

	<form method="POST" action="<?php echo URL.'controller/patientController.php' ;?>">

<div>
		

				<h1 style="align: center">INSERER PATIENT</h1>
				<div >
				
		Nom Patient:<br><input type ="text"  class="form-control" name="nom"  placeholder="merci d'entrer votre Nom">
		</div>

		<div >	
		Prenom Patient:<br><input type ="text"  name="prenom"  placeholder="merci d'entrer votre Prenom">
		</div>
		<div >	
		Adresse Patient:<br><input type ="text"  name="adresse"  placeholder="merci d'entrer votre Adresse">
		</div>
		<div >	
		Telephone Patient:<br><input type ="text"  name="tel"  placeholder="merci d'entrer votre Telephone">
		</div>
		<div >	
		Email Patient:<br><input type ="text"  name="email"  placeholder="merci d'entrer votre Email">
		</div>
		<div >	
		Date Naissance Patient:<br><input type ="text"  name="date"  placeholder="merci d'entrer votre Date de Naissance">
		</div>
		<div >	
		Poids Patient:<br><input type ="text"  name="poids"  placeholder="merci d'entrer votre Poids">
		</div>
		<div >	
		Lieu Naissance Patient:<br><input type ="text"  name="lieu"  placeholder="merci d'entrer votre Lieu de naissance">
		</div>
	
		<input class="btn" type="submit" name="forminscription" value="Enregistrer">
    </div>
	</form>

		
</div>
</body>
</html>
