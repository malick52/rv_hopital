
<?php

error_reporting(E_ALL);
ini_set("display_errors",1);
require_once'../model/connexionn.php';
//require_once'patient.class.php';
//require_once'liste.php';
require_once'../model/utilisateur.php';
	//extract($_POST);
	if(isset($_POST['user'])){
    $Username=$_POST['username'];
    $Password=$_POST['password'];
    
    utilisateur($Username,$Password);
     }


	
