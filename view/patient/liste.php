
<?php
ini_set("display_errors",1);
require_once '../../model/patient.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <!-- importer le fichier de style -->
		<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
		
</head>

<body >
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
<?php 


?>
<div id="container">
	<div >
		<div >
			<h1 ><strong>liste<br>des patients <br> <br> </strong></h1>
	 
          <table>

					
				
					<tr>
						<td>Nom</td>
						<td>Prenom</td>
						<td>Adresse</td>
						<td>Telephone</td>
						<td>Email</td>
						<td>Date de Naissance</td>
						<td>Poids</td>
						<td>Lieu de Naissance</td>
						
						<td colspan=2>Actions</td>
						<td>NOTIFICATION</td>
					</tr>"
<?php

				  $liste=liste();
				  
				  foreach($liste as $patient){
					  
				  
					 
						echo"<tr>
						<td>$patient[nom_patient]</td>
						<td>$patient[prenom_patient]</td>
						<td>$patient[adresse_patient]</td>
						<td>$patient[tel_patient]</td>
						<td>$patient[email_patient]</td>
						<td>$patient[date_naissance_patient]</td>
						<td>$patient[poids_patient]</td>
						<td>$patient[lieu_naissance]</td>
						
						
					
						<td><a href='delete.php?id_emp=$patient[id_patient]'>supprimer-</a></td>
						<td><a href='update.php?id_emp=$patient[id_patient]'>Modifier</a></td>
						</td>
						</tr>";
					}
					echo"</table>";
					

				?>
				</table>
		</div>
	</div>
</div>	
echo"<a href='add.php'><button class = 'btn btn-inverse btn-lg'>Ajoutez Patient</button></a><br>";
echo"<br><table class='table table-bordered table-hover' style='color : maroon;'>
</body>
</html>