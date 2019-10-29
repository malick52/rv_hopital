
<?php
  require"connexionn.php";
function delite($idp){
$sql="DELETE FROM secretariat WHERE id_secretariat =$idp ";
$conn->query($sql);
}
function add($Nom,$Tel,$Adresse)
{
    $sql="INSERT INTO secretariat VALUES(NULL,'$Nom','$Tel','$Adresse') ";
    $conn->querry($sql);
}
