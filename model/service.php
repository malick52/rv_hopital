
<?php
  require"connexionn.php";
function delite($idp){
$sql="DELETE FROM service WHERE id_service =$idp ";
$conn->query($sql);
}
function add($Nom,$Adresse,$Tel,$Email)
{
    $sql="INSERT INTO patient VALUES(NULL,'$Nom','$Adresse','$Tel','$Email') ";
    $conn->querry($sql);
}
