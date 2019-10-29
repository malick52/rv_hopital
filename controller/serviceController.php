
<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require_once'connexionn.php';
require_once'service.php';


	//extract($_POST);
	if(isset($_POST['forminscription'])){
    $Nom=$_POST['nom_service'];
    $Adresse=$_POST['adresse_service'];
    $Tel=$_POST['tel_service'];
    $Email=$_POST['email_service'];
    
	
    add($Nom);
     }
	?>