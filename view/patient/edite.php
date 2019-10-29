<?php 
require"connexionn.php";

?>
<?php

$sql="select * from mane WHERE nom_emp= '$_POST[nom_emp]'";
$resultat=$conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
   
</head>

<body >
	<div >
	<div>
		<div >
			<h1 ><strong>Systeme <br>d'inscription <br> en ligne <br> </strong>EMPLOYE</h1>
		</div>

		<div >
			
<div >
				<?php while ($man=mysqli_fetch_array($resultat)) {?>

				<h1>MODIFIER EMPLOYE</h1>
				matricule:<br><input type ="text"  name="mat"  placeholder="merci d'entrer votre matricule"><br>		
		Nom:<br><input type ="text"  name="nom"  placeholder="merci d'entrer votre nom"><br>
		
		
						

	
		<input class="btn" type="submit" name="forminscription" value="save">

				   <?php } ?>

			</div>
		</div>
	</div>
</div>	
		
</body>
</html>