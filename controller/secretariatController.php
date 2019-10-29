<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require_once'connexionn.php';
require_once'secretariat.php';


	//extract($_POST);
	if(isset($_POST['forminscription'])){
    $Nom=$_POST['nom_secretariat'];
    $Tel=$_POST['tel_secretariat'];
    $Adresse=$_POST['adresse_secretariat'];
	
    add($Nom);
     }
	?>