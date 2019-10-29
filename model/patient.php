
<?php
require_once'connexionn.php';


//require_once'patient.php';
//require_once'patient.class.php';
//require_once'liste.php';

function delite($idp){
$sql="DELETE FROM patient WHERE id_patient =$idp ";
$con->query($sql);
}
   function add($Nom,$Prenom,$Adresse,$Tel,$Email,$Date,$Poids,$Lieu)
{
    global $con;

    $sql="INSERT INTO patient VALUES(NULL,'$Nom','$Prenom','$Adresse','$Tel','$Email','$Date','$Poids','$Lieu')";
     $r=$con->query($sql);
     return $r;
}
function liste(){
    global $con;
    $sql="SELECT * FROM patient ";
    return $con->query($sql);

}
?>
