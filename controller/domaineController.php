<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require_once'connexionn.php';
require_once'domaine.php';


	//extract($_POST);
	if(isset($_POST['forminscription'])){
	$Nom=$_POST['nom_domaine'];
	
    add($Nom);
     }
	?>