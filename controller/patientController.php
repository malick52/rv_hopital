<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
require_once'../model/connexionn.php';
//require_once'patient.class.php';
//require_once'liste.php';
require_once'../model/patient.php';
	//extract($_POST);
	if(isset($_POST['forminscription'])){
    $Nom=$_POST['nom'];
    $Prenom=$_POST['prenom'];
    $Adresse=$_POST['adresse'];
    $Tel=$_POST['tel'];
    $Email=$_POST['email'];
    $Date=$_POST['date'];
    $Poids=$_POST['poids'];
    $Lieu=$_POST['lieu'];
    add($Nom,$Prenom,$Adresse,$Tel,$Email,$Date,$Poids,$Lieu);
     }


	?>