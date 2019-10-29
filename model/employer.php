
<?php
  require"connexionn.php";
function delite($idp){
$sql="DELETE FROM employer WHERE id_employer =$idp ";
$conn->query($sql);
}
function add($Nom,$Prenom,$Tel,$Adresse,$Date_naiss,$Email)
{
    $sql="INSERT INTO employer VALUES(NULL,'$Nom','$Prenom','$Tel','$Adresse','$Date_naiss','$Email') ";
    $conn->querry($sql);
}
