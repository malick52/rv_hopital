<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require_once'connexionn.php';
require_once'employer.php';


	//extract($_POST);
	if(isset($_POST['forminscription'])){
	$Nom=$_POST['nom_employer'];
	$Prenom=$_POST['prenom_employer'];
	$Tel=$_POST['tel_employer'];
	$Adresse=$_POST['adresse_employer'];
	$Date_naiss=$_POST['date_naiss_employer'];
	$email=$_POST['email_employer'];
    add($Nom,$Prenom,$Tel,$Adresse,$Date_naiss,$email);
     }
	?>