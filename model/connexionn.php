<!DOCTYPE html>
<html>
<head>
<title> php et mysql</title>
<meta charet="utf-8"/>
 </head>
 <body>
<?php
//$serveur='localhost';
//$login='malick';
//$pass='NDIAYE@5903a';

/*$serveur="localhost";
 $login="malick";
 $pass="NDIAYE@5903a";
	 $con=mysqli_connect("localhost","malick","NDIAYE@5903a","hopital");
     //$con
  if($con){
      echo "mrcie";
  }
  else
{
    echo"non";
}*/
$serveur="localhost";
$login="malick";
$pass="NDIAYE@5903a";
$serveur="localhost";
 $login="malick";
 $pass="NDIAYE@5903a";
	 $con=new PDO("mysql:host=$serveur;dbname=hopital",$login,$pass);
     //$con-> setAttribute(PDO::ATTR_ERRMODE_EXCEPTION);
  if($con){
      echo "mrcie";
  }
?>
</body>
</html>