<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
require_once'connexionn.php';
require_once'rv.php';


	//extract($_POST);
	if(isset($_POST['forminscription'])){
    $Heure=$_POST['nom_patient'];
    $Date=$_POST['prenom_patient'];
    $Lieu=$_POST['adresse_patient'];
   
	
    add($Nom);
     }
	?>